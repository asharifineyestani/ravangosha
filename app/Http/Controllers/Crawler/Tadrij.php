<?php

namespace App\Http\Controllers\Crawler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Author;
use App\Models\Book;
use App\Models\Seller;
use App\Models\BookStock;

class Tadrij extends Controller
{

    public function byCategory($category)
    {
        https://betadrij.ir/subject/self-development/page/2/

        $baseURL = 'https://betadrij.ir/subject/'.$category.'/page/';
        $pageCount = 13;

        $urls = [];

        for ($page = 1; $page <= $pageCount; $page++) {
            $urls[] = $baseURL . $page;
        }


       foreach ($urls as $url) {
          $this->extractBooks($url);
       }

    }

    public function extractBooks($url)
    {
        $client = new Client();
        $response = $client->get($url);
        $html = $response->getBody()->getContents();

        $crawler = new Crawler($html);

        $books = [];

        $productElements = $crawler->filter('div.product-small');

        $productElements->each(function (Crawler $product) use (&$books) {
            $title = $product->filter('p.name.product-title.woocommerce-loop-product__title')->text();
            $price = $product->filter('span.woocommerce-Price-amount.amount')->text();
            $link = $product->filter('a.woocommerce-LoopProduct-link.woocommerce-loop-product__link')->attr('href');
            $image = $product->filter('img')->attr('src');

            $books[] = [
                'title' => $title,
                'price' => $price,
                'link' => $link,
                'image' => $image,
            ];


        });

        foreach($books as $book){
            $this->extractBookInfo($book['link']);
        }





        return $books;

    }


    public function extractBookInfo($url, $save = true)
    {

        // Send an HTTP request to the provided URL
        $client = new Client();
        $response = $client->request('GET', $url);
        $htmlContent = $response->getBody()->getContents();

        // Check if the request was successful (status code 200)
        if ($response->getStatusCode() == 200) {
            // Parse the HTML content using Symfony Panther
            $crawler = new Crawler($htmlContent);

            // Extract information from the HTML structure
            $bookName = $crawler->filter('h1')->text();
            $authorName = $crawler->filter('a[rel="tag"]')->eq(0)->text();
            $translatorName = $crawler->filter('a[rel="tag"]')->eq(1)->text();

            $publicationName = $crawler->filter('a[rel="tag"]')->eq(2)->count() > 0
                ? $crawler->filter('a[rel="tag"]')->eq(2)->text()
                : '';

            // Extract the book image URL if it exists
            $largeImageElement = $crawler->filter('picture[data-large_image]');

            // Extract the value of the data-large_image attribute
            $dataLargeImageValue = $largeImageElement->attr('data-large_image');

            // Helper function to get text content if the node exists
            $getTextIfExists = function ($crawler, $selector) {
                $node = $crawler->filter($selector);

                return $node->count() > 0 ? $node->text() : '';
            };

            // Extract information from the HTML table and store in variables
            $publishDateAd = $getTextIfExists($crawler, 'tr.pa_publish-date-en th + th');
            $publishDateShamsi = $getTextIfExists($crawler, 'tr.pa_publish-date-fa th + th');
            $isbn = $getTextIfExists($crawler, 'tr.pa_isbn th + th');
            $coverType = $getTextIfExists($crawler, 'tr.pa_cover th + th');
            $size = $getTextIfExists($crawler, 'tr.pa_size th + th');
            $pageCount = $getTextIfExists($crawler, 'tr.pa_pages th + th');
            $printNumber = $getTextIfExists($crawler, 'tr.pa_print-num th + th');

            // Extract information about the author's image
            $authorImageElement = $crawler->filter('div.img-inner img');
            $authorImageUrl = $authorImageElement->attr('src');

            // Store the extracted information in an array


            $bookData = [
                'author_name' => $authorName,
                'author_image_url' => $authorImageUrl,
                'book_title' => $bookName,
                'book_image_url' => $dataLargeImageValue,
                'translator' => $translatorName,
                'publication' => $publicationName,
                'publish_date' => $publishDateAd,
                'isbn' => $isbn,
                'cover_type' => $coverType,
                'size' => $size,
                'page_count' => $pageCount,
                'print_number' => $printNumber,

            ];

            if ($save){
                $this->saveBookDataToDatabase($bookData);
            }

            // Return the array with extracted information
            return $bookData;
        } else {
            echo "Error: Unable to retrieve the page. Status Code: {$response->getStatusCode()}\n";
            // Return an empty array in case of an error
            return [];
        }
    }

    public function saveBookDataToDatabase($bookData)
    {
        // 1. Author
        $author = Author::where('name', $bookData['author_name'])->first();
        if (!$author) {
            $author = Author::create([
                'name' => $bookData['author_name'],
                'image_url' => $bookData['author_image_url'],
//                'description' => $bookData['author_description'],
            ]);
        }

        // 2. Book
        $book = Book::where('title', $bookData['book_title'])->first();
        if (!$book) {
            $book = Book::create([
                'title' => $bookData['book_title'],
                'book_image_url' => $bookData['book_image_url'],
                'translator' => $bookData['translator'],
                'publication' => $bookData['publication'],
                'publish_date' => $bookData['publish_date'],
                'isbn' => $bookData['isbn'],
                'cover_type' => $bookData['cover_type'],
                'size' => $bookData['size'],
                'page_count' => $bookData['page_count'],
                'print_number' => $bookData['print_number'],
                'author_id' => $author->id,
            ]);
        }


    }
}

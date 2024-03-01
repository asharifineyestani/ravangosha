<?php

namespace App\Http\Controllers\Crawler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class Tadrij extends Controller
{

    public function extractBooks()
    {
        $url = 'https://betadrij.ir/subject/self-development/';
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

        return $books;
    }


    public function extractBookInfo()
    {
        // Example URL
        $url = 'https://betadrij.ir/shop/staring-at-the-sun/';

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
            $publicationName = $crawler->filter('a[rel="tag"]')->eq(2)->text();

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
            $bookInfo = [
                'book_name' => $bookName,
                'author_name' => $authorName,
                'translator_name' => $translatorName,
                'publication_name' => $publicationName,
                'book_image_url' => $dataLargeImageValue,
                'publish_date_ad' => $publishDateAd,
                'publish_date_shamsi' => $publishDateShamsi,
                'isbn' => $isbn,
                'cover_type' => $coverType,
                'size' => $size,
                'page_count' => $pageCount,
                'print_number' => $printNumber,
                'author_image_url' => $authorImageUrl,
            ];

            // Return the array with extracted information
            return $bookInfo;
        } else {
            echo "Error: Unable to retrieve the page. Status Code: {$response->getStatusCode()}\n";
            // Return an empty array in case of an error
            return [];
        }
    }
}

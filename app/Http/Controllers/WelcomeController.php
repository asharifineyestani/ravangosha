<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(Request $request)
    {

        return view('welcome')->with([
            'books' => Book::query()->limit(18)->get(),
            'abridged_books' => Book::query()->where('category_id', 2)->limit(12)->get()
        ]);
    }
}

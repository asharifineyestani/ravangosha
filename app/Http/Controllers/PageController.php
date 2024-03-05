<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function show($id)
    {
        return view('errors.404');

    }

    public function show404()
    {
        return view('errors.404');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksDetailsController extends Controller
{
    public function show(Book $details)
    {
        $details->load('books');

        return view('book');
    }
}

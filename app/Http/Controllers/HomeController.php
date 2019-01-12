<?php

namespace App\Http\Controllers;

use App\Http\Models\Books;
use App\Http\Models\BookTraders;

class HomeController extends Controller
{
    public static function index()
    {
        $books = Books::getBooks();
        return view('home')->with('books',$books);
    }

    public static function show()
    {
    }
}

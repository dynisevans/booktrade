<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Http\Models\Books;
use App\Http\Models\BookTraders;

class BookController extends Controller
{
    public static function index()
    {
        $books = Books::getBooks();
        return view('home')->with('books',$books);
    }

    public static function show($BookID)
    {
        $bookinfo = Books::getSingleBook($BookID);
        $traderInfo = Books::getBookTraders($BookID);
        return view('book')->with('bookInfo',$bookinfo)->with('traderInfo',$traderInfo);
    }
}

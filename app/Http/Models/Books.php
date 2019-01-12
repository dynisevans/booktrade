<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Models\BookTraders;

class Books extends Model
{
    public static function getBooks()
    {
        //hai câu câu lệnh dưới có tác dụng giống nhau
        //$books = Books::all();
        //$books = DB::select(DB::raw('SELECT * FROM books'));
        $books = DB::select(DB::raw('SELECT b.BookID,b.BookName,b.BookDescription,b.BookCover,a.AuthorID,a.AuthorName FROM books b JOIN authors a ON b.AuthorID=a.AuthorID'));
        return $books;
    }

    public static function getSingleBook($BookID)
    {
        $book = Books::all()->where('BookID',$BookID);
        return $book;
    }

    public static function getBookAuthors($BookID)
    {
        $bookauthors = DB::select(DB::raw('SELECT b.BookID,ba.AuthorID,ba.AuthorName FROM books b JOIN bookauthors ba on b.BookID = ba.BookID'));
        return $bookauthors;
    }

    public static function getBookTraders($BookID)
    {
        $traders = DB::select(DB::raw('SELECT * FROM booktraders bt JOIN accounts a on bt.AccountID = a.ID WHERE '.$BookID.'=1'));
        return $traders;
    }
}

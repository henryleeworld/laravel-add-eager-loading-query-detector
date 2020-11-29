<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BooksController extends Controller
{
    public function showNoEagerLoading() 
    {
        $books = Book::all();
        foreach ($books as $book) {
            echo $book->author->name . PHP_EOL;
        }
    }

    public function showEagerLoading() 
    {
        $books = Book::with('author')->get();
        foreach ($books as $book) {
            echo $book->author->name . PHP_EOL;
        }
    }
}

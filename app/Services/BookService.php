<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookService
{
    /**
     *  Url base para consumir endpoint del microservicio de authors
     *  @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }

    public function getBooks()
    {
        return Http::get($this->baseUri . '/books');
    }

    public function showBook($books)
    {
        return Http::get($this->baseUri . "/books/{$books}");
    }

    public function createBook(Request $request)
    {
        return Http::post($this->baseUri . '/books', $request->all());
    }

    public function updateBook(Request $request, $books)
    {
        return Http::patch($this->baseUri . "/books/{$books}", $request->all());
    }

    public function deleteBook($books)
    {
        return Http::delete($this->baseUri . "/books/{$books}");
    }
}

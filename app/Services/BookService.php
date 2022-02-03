<?php

namespace App\Services;

use App\Traits\ApiMicroservices;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class BookService
{
    use ApiMicroservices;

    /**
     *  Url base para consumir endpoint del microservicio de authors
     * @var string
     */
    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
        $this->secret = config('services.books.secret');
    }

    public function getBooks()
    {
        return $this->apiGet('/books');
    }

    public function showBook($books)
    {
        return $this->apiGet("/books/{$books}");
    }

    public function createBook(Request $request)
    {
        return $this->apiPost("/books", $request->all());
    }

    public function updateBook(Request $request, $books)
    {
        return $this->apiPatch("/books/{$books}", $request->all());
    }

    public function deleteBook($books)
    {
        return $this->apiDelete("/books/{$books}");
    }
}

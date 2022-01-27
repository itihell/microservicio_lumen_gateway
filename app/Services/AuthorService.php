<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthorService
{
    /**
     *  Url base para consumir endpoint del microservicio de authors
     *  @var string
     */
    public $baseUri;

    public function __construct()
    {
        /**
         *
         * Seteando la variable base de la url desde el archivo .env pasando por la configuración
         */
        $this->baseUri = config('services.authors.base_uri');
    }

    public function getAuthors()
    {
        return Http::get($this->baseUri . '/authors');
    }

    public function showAuthor($author)
    {
        return Http::get($this->baseUri . "/authors/$author");
    }

    public function createAuthor(Request $request)
    {
        return Http::post($this->baseUri . '/authors', $request->all());
    }

    public function updateAuthor(Request $request, $author)
    {
        return Http::patch($this->baseUri . "/authors/{$author}", $request->all());
    }

    public function deleteAuthor($author)
    {
        return Http::delete($this->baseUri . "/authors/{$author}");
    }
}

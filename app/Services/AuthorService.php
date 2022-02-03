<?php

namespace App\Services;

use App\Traits\ApiMicroservices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthorService
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
        /**
         *
         * Seteando la variable base de la url desde el archivo .env pasando por la configuración
         */
        $this->baseUri = config('services.authors.base_uri');
        $this->secret = config('services.authors.secret');
    }

    public function getAuthors()
    {
        return $this->apiGet('/authors');
    }

    public function showAuthor($author)
    {
        return $this->apiGet("/authors/$author");
    }

    public function createAuthor(Request $request)
    {
        return $this->apiPost('/authors', $request->all());
    }

    public function updateAuthor(Request $request, $author)
    {
        return $this->apiPatch("/authors/{$author}", $request->all());
    }

    public function deleteAuthor($author)
    {
        return $this->apiDelete("/authors/{$author}");
    }
}

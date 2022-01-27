<?php

namespace App\Services;

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
        $this->baseUri = config('services.authors.base_uri');
    }

    public function getAuthors()
    {
        return Http::get($this->baseUri . '/authors');
    }
}

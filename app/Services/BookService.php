<?php

namespace App\Services;

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
}

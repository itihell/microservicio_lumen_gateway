<?php

namespace App\Services;

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
}

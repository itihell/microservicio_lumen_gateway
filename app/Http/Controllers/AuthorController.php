<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthorController extends Controller
{
    use ApiResponser;
    public $authorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index(Request $request)
    {
        $response = Http::get('http://author-api.test/authors');
        return $this->successResponse($response);
    }

    public function store(Request $request)
    {
        # code...
    }

    public function show($author)
    {
        # code...
    }

    public function update(Request $request, $author)
    {
        # code...
    }

    public function destroy($author)
    {
        # code...
    }
}

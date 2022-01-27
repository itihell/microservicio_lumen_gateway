<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;


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
        return $this->successResponse($this->authorService->getAuthors());
    }

    public function store(Request $request)
    {
        return $this->successResponse($this->authorService->createAuthor($request));
    }

    public function show($author)
    {
        return $this->successResponse($this->authorService->showAuthor($author));
    }

    public function update(Request $request, $author)
    {
        return $this->successResponse($this->authorService->updateAuthor($request, $author));
    }

    public function destroy($author)
    {
        return $this->successResponse($this->authorService->deleteAuthor($author));
    }
}

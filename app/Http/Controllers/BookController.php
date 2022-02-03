<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ApiResponser;

    public $bookService;
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService, AuthorService $authorService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }

    public function index(Request $request)
    {
        return $this->successResponse($this->bookService->getBooks());
    }

    public function store(Request $request)
    {
        $this->authorService->showAuthor($request->author_id);
        return $this->successResponse($this->bookService->createBook($request));
    }

    public function show($book)
    {
        return $this->successResponse($this->bookService->showBook($book));
    }

    public function update(Request $request, $book)
    {
        $this->authorService->showAuthor($request->author_id);
        return $this->successResponse($this->bookService->updateBook($request, $book));
    }

    public function destroy($book)
    {
        return $this->successResponse($this->bookService->deleteBook($book));
    }
}

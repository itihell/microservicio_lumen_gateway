<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ApiResponser;
    public $bookService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index(Request $request)
    {
    }

    public function store(Request $request)
    {
        # code...
    }

    public function show($book)
    {
        # code...
    }

    public function update(Request $request, $book)
    {
        # code...
    }

    public function destroy($book)
    {
        # code...
    }
}

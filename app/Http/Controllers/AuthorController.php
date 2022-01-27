<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
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

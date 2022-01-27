<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
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

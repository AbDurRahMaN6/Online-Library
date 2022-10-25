<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index( Request $request)
    {
        $books = Book::with('title');
        if ($request->has('search')) {
            $books = $books->search($request->search);
        }
        return BookResource::collection($books->paginate(8));
    }
    
    // public function search(Request $request){
    //     $search = $request->get('q');
    //     return Books::where ('title','description', '%'.search.'%')->get();
    // }
}

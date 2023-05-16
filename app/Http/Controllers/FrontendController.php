<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class FrontendController extends Controller

{
    function index(){
        return view('new');
    }

    //insert
    function insert(Request $request){
        $books =new Book();
        $books-> bookname= $request->input('bookname');
        $books-> publishername= $request->input('publishername');
        $books-> pageno= $request->input('pageno');
        $books-> age= $request->input('age');
        $books->save();
        return redirect('/')->with("success","New book Added");

    }

    //view
    function edit(){
        $alldata = Book::all();
        return view('edit', compact('alldata'));
    }



}


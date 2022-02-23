<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function create(){

        return view('books.create');
    }
        //How to save datas to DB
        //Request object has the data from the form
        public function store(Request $request){

            //Function for saving data to DB
          //  dd($request->title); //dump and die the request data
          $book = new Book();
          $book->title = $request->title; //View request (send) data to Controller
          $book->description = $request->description;
          $book->save();

          return redirect('/books/' . $book->id);
        }
    
        public function index(){
            $listOfbooks = Book::all();
            return view('books.index', compact('listOfbooks'));
        }

        // This is a function for showing a single book when we provide an ID
        public function shw($id){

            // $id is the value of the wild card in web.php
            //find()=>will get the book record with an ID of some integer value
            $book=Book::find($id);

            $test="hoge hoge";
           // dd($book);
            return view('books.show', compact('book', "test"));
        }

        public function edit($id){
            $book=Book::find($id);
            return view('books.edit', compact('book')); 
            //表示させるために表示させるblade.phpとfunction内で作った変数をcompactの中に入れる
        }

        public function update(Request $request, $id){
            // This will accept the form data
            // and update the database

            $book=Book::find($id);

            $book->title = $request->title;
            $book->description = $request->description;
            $book->save();
            return redirect('/books');
        }

        public function delete($id){
            $book=Book::find($id);

            // Delete a book
            $book->delete();
            return redirect('/books');
        }
    }


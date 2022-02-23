<?php
// Controller
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        //$books = Book::all();
        //all()->get all records in the table

        $books = Book::where('title', '=', 'Book 2')->get();
        //where('colum_name', 'comparison_operator', 'value') and a condition for fetching data

        //Go to books.blade.php
        //And press the books variable by using compact function
        return view('books', compact('books'));
        //pass book variable controller to view (compact)
    }

    public function create()
    {
        return view('createBook');
    }
}

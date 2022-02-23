<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Board;

class BoardController extends Controller
{
    public function getIndex(){

        $boards = Board::all();

        return view('board.index', compact('boards'));
    }
}



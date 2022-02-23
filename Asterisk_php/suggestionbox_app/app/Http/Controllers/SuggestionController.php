<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggestion;
use App\Vote;

class SuggestionController extends Controller
{   
    
    public function create () {

        return view('suggestions.create'); 
    }

    public function store(Request $request){
       /*
        $suggestion = new Suggestion();
        $suggestion->content = $request->content; //View request (send) data to Controller
        $suggestion->author = $request->author;
        $suggestion->save();
       */

        //Another method to save datas to db
        //Mass assignment create method
        Suggestion::create([
            'content' =>$request->content,
            'author' =>$request->author
        ]);
        return redirect('/suggestions/create');
    }

    public function index(){
        $listOfsuggestions = Suggestion::all();
        return view('suggestions.index', compact('listOfsuggestions'));
    }

    public function edit($id){
        $suggestion = Suggestion::find($id);
        return view ('suggestions.edit', compact('suggestion'));
    }

    public function update(Request $request, $id){
        $suggestion=Suggestion::find($id);

        /*
        $suggestion->content = $request->c;
        $suggestion->author = $request->a;
        $suggestion->save();
        return redirect('/suggestions/index');
        */
       
        $suggestion->update([
            'content' =>$request->c,
            'author' =>$request->a
        ]);

        return redirect()->route('suggestions.index');
      
    }

    public function delete($id){
        $suggestion=Suggestion::find($id);

        $suggestion->delete();
        return redirect('/suggestions/index');
    }

    public function upvote($suggestion_id){
        //create a new vote record in DB

        //First way
        // $vote= new Vote();
        // $vote->suggestion_id=$suggestion_id;
        // $vote->save();

        //Second way
       // Vote::create([
       //     'suggestion_id'=>$suggestion_id
    // ]);

        //Third way : using "Relationship"
        $suggestion = Suggestion::find($suggestion_id);
        $vote=new Vote();
        $suggestion->votes()->save($vote);

        return redirect('/suggestions/index');

    }

    public function downvote($suggestion_id){
        $suggestion = Suggestion::find($suggestion_id);

        //Get the FIRST vote from the $suggestion's vote collection, then delete
        $suggestion->votes()->first()->delete();
        return redirect('/suggestions/index');
    }
}

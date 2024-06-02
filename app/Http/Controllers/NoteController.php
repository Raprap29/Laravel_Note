<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class NoteController extends Controller
{
    // Show the page of the main note
    public function index(){
        $notes = Note::latest()->get();
        return view("page.main.main", ['notes' => $notes]);
    }

    public function createPage(){
        return view("page.main.createnote");
    }

    // create route of the note
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'users_id' => 'string',
            'content' => 'required', 
        ]);
    
        $data['users_id'] = "test";
        // Creating the note
        $note = Note::create($data);

        return redirect()->route('main.index')->with('success', "fuck you");
    }
    
    public function show(Note $note){
        return view("page.main.shownote", compact('note'));
    }
    
    public function destroy(Note $note){
        $note->delete();
        return redirect()->route('main.index')->with('deleted', "Deleted na fuck you");
    }

}

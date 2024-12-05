<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Film;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Film $film)
    {
        $comments = Comment::where('film_id', $film->id)->get();
        return view('comments.index', compact('comments', 'film'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        $comment->save();
        $films = Film::where('id', $request['film_id']);
        $film = $films->first();
        $comments = Comment::where('film_id', $film->id)->get();

        return to_route('comments.index', compact('comments', 'film'));
    }
}

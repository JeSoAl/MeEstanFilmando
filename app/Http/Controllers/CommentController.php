<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Services\CommentsService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private $commentsService;

    public function __construct(CommentsService $commentsService)
    {
        $this->commentsService = $commentsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::all();
        $films = Film::all();
        $comments = $this->commentsService->search($request)->get();
        return view('admin.comments.index', compact('comments', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comment = new Comment();
        return view('admin.comments.create', compact('comment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        $comment->save();

        return to_route('admin.comments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('admin.comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());

        return to_route('admin.comments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return to_route('admin.comments.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

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
        $comments = $this->commentsService->search($request)->paginate($request->get('per_page', 10));
        return view('admin.comments.index', compact('comments', 'request'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('admin.comments.show', compact('comment'));
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

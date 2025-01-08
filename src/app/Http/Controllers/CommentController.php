<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $user = Auth::user();
        $item = Item::with('user', 'condition', 'category')->where([
            ['id', '=', $request->item_id],
        ])->get();

        if ($user != null) {
            $favorite = Favorite::where([
                ['user_id', '=', $user['id']],
                ['item_id', '=', $request->item_id],
            ])->get();

            if ($favorite != "[]") {
                $favorite_status = 1;
            } else {
                $favorite_status = 0;
                $favorite = null;
            }
        } else {
            $favorite_status = 0;
            $favorite = null;
        }
        $favorites = Favorite::where([
            ['item_id', '=', $request->item_id],
        ])->get();
        $favoriteCount = count($favorites);

        if ($user != null) {
            $comment = Comment::where([
                ['user_id', '=', $user['id']],
                ['item_id', '=', $request->item_id],
            ])->get();

            if ($comment != "[]") {
                $comment_status = 1;
            } else {
                $comment_status = 0;
                $comment = null;
            }
        } else {
            $comment_status = 0;
            $comment = null;
        }
        $comments = Comment::where([
            ['item_id', '=', $request->item_id],
        ])->get();
        $commentCount = count($comments);

        $result = Comment::with('user')->where([
            ['item_id', '=', $request->item_id],
        ])->orderBy('id', 'desc')->take(3)->get();

        $usersArray = $result->toArray();
        $usersCount = count($usersArray);

        return view('comment', compact('item', 'favorite_status', 'favoriteCount', 'commentCount', 'comment_status', 'usersArray', 'usersCount'));
    }

    public function create(CommentRequest $request)
    {
        $user = Auth::user();
        $comment = [
            'user_id' => $user['id'],
            'item_id' => $request->item_id,
            'comment' => $request->comment,
        ];
        Comment::create($comment);

        return redirect(route('comment.comment', [
            'item_id' => $request->item_id,
        ]));
    }
}

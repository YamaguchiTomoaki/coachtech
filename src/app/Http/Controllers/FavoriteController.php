<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function create(Request $request)
    {
        $user = Auth::user();
        $favorite = [
            'user_id' => $user['id'],
            'item_id' => $request->item_id,
        ];
        Favorite::create($favorite);

        return redirect(route('item.detail', [
            'item_id' => $request->item_id,
        ]));
    }

    public function delete(Request $request)
    {
        $user = Auth::user();
        Favorite::where([
            ['user_id', '=', $user['id']],
            ['item_id', '=', $request->item_id],
        ])->delete();

        return redirect(route('item.detail', [
            'item_id' => $request->item_id,
        ]));
    }
}

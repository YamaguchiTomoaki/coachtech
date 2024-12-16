<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;


class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('user', 'condition', 'category')->get();
        $itemsCount = count($items);
        $itemsArray = $items->toArray();

        $user = Auth::user();
        if ($user != null) {
            $mylists = Favorite::where([
                ['user_id', '=', $user['id']],
            ])->orderBy('id')->get();
            $mylistsCount = count($mylists);
            $mylistsArray = $mylists;
        } else {
            $mylistsArray = null;
            $mylistsCount = null;
        }


        /*for ($id = 0; $id < $itemsCount; $id++) {
            $categoryCount = count($itemsArray[$id]['category']);
        }
        $categoryCount = count($itemsArray[4]['category']);
        dd($categoryCount);*/
        return view('index', compact('itemsArray', 'itemsCount', 'mylistsArray', 'mylistsCount'));
    }

    public function search(Request $request)
    {
        $items = Item::with('user', 'condition', 'category')->ItemSearch($request->name)->get();
        $itemsCount = count($items);
        $itemsArray = $items->toArray();

        $user = Auth::user();
        if ($user != null) {
            $mylists = Favorite::where([
                ['user_id', '=', $user['id']],
            ])->orderBy('id')->get();
            $mylistsCount = count($mylists);
            $mylistsArray = $mylists;
        } else {
            $mylistsArray = null;
            $mylistsCount = null;
        }

        return view('index', compact('itemsArray', 'itemsCount', 'mylistsArray', 'mylistsCount'));
    }

    public function detail(Item $item_id)
    {
        $item = Item::with('user', 'condition', 'category')->where([
            ['id', '=', $item_id->id],
        ])->get();
        $categoryCount = count($item[0]['category']);
        // $item[0]['category'][0]['category']
        return view('detail', compact('itemArray', 'categoryCount'));
    }
}

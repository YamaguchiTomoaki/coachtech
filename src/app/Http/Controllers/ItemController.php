<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellRequest;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Buy;
use App\Models\Condition;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
        $buys = Buy::orderBy('item_id')->get();
        $buysCount = count($buys);
        $buysArray = $buys->toArray();
        $items = Item::with('user', 'condition', 'category')->get();
        if ($items == "[]") {
            $itemsArray = null;
            $itemsCount = null;
        } else {
            $itemsCount = count($items);
            $itemsArray = $items->toArray();
            for ($id = 0; $id < $itemsCount; $id++) {
                $itemsArray[$id]['buy'] = 0;
            }
            for ($id = 0; $id < $itemsCount; $id++) {
                for ($count = 0; $count < $buysCount; $count++) {
                    if ($itemsArray[$id]['id'] == $buysArray[$count]['item_id']) {
                        $itemsArray[$id]['buy'] += 1;
                    } else {
                        $itemsArray[$id]['buy'] += 0;
                    }
                }
            }
        }

        $user = Auth::user();
        if ($user != null) {
            $mylists = Favorite::with('item')->where([
                ['user_id', '=', $user['id']],
            ])->orderBy('id')->get();
            $mylistsCount = count($mylists);
            $mylistsArray = $mylists->toArray();
            for ($id = 0; $id < $mylistsCount; $id++) {
                $mylistsArray[$id]['buy'] = 0;
            }
            for ($id = 0; $id < $mylistsCount; $id++) {
                for ($count = 0; $count < $buysCount; $count++) {
                    if ($mylistsArray[$id]['item_id'] == $buysArray[$count]['item_id']) {
                        $mylistsArray[$id]['buy'] += 1;
                    } else {
                        $mylistsArray[$id]['buy'] += 0;
                    }
                }
            }
        } else {
            $mylistsArray = null;
            $mylistsCount = null;
        }

        return view('index', compact('itemsArray', 'itemsCount', 'mylistsArray', 'mylistsCount'));
    }

    public function search(Request $request)
    {
        $buys = Buy::orderBy('item_id')->get();
        $buysCount = count($buys);
        $buysArray = $buys->toArray();

        $items = Item::with('user', 'condition', 'category')->ItemSearch($request->name)->get();
        if ($items == "[]") {
            $itemsArray = null;
            $itemsCount = null;
        } else {
            $itemsCount = count($items);
            $itemsArray = $items->toArray();
            for ($id = 0; $id < $itemsCount; $id++) {
                $itemsArray[$id]['buy'] = 0;
            }
            for ($id = 0; $id < $itemsCount; $id++) {
                for ($count = 0; $count < $buysCount; $count++) {
                    if ($itemsArray[$id]['id'] == $buysArray[$count]['item_id']) {
                        $itemsArray[$id]['buy'] += 1;
                    } else {
                        $itemsArray[$id]['buy'] += 0;
                    }
                }
            }
        }

        $user = Auth::user();
        if ($user != null) {
            $mylists = Favorite::with('item')->where([
                ['user_id', '=', $user['id']],
            ])->orderBy('id')->get();
            $mylistsCount = count($mylists);
            $mylistsArray = $mylists->toArray();
            for ($id = 0; $id < $mylistsCount; $id++) {
                $mylistsArray[$id]['buy'] = 0;
            }
            for ($id = 0; $id < $mylistsCount; $id++) {
                for ($count = 0; $count < $buysCount; $count++) {
                    if ($mylistsArray[$id]['item_id'] == $buysArray[$count]['item_id']) {
                        $mylistsArray[$id]['buy'] += 1;
                    } else {
                        $mylistsArray[$id]['buy'] += 0;
                    }
                }
            }
        } else {
            $mylistsArray = null;
            $mylistsCount = null;
        }

        return view('index', compact('itemsArray', 'itemsCount', 'mylistsArray', 'mylistsCount'));
    }

    public function detail(Item $item_id)
    {
        $user = Auth::user();
        $item = Item::with('user', 'condition', 'category')->where([
            ['id', '=', $item_id->id],
        ])->get();
        $categoryCount = count($item[0]['category']);
        if ($user != null) {
            $favorite = Favorite::where([
                ['user_id', '=', $user['id']],
                ['item_id', '=', $item_id->id],
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
            ['item_id', '=', $item_id->id],
        ])->get();
        $favoriteCount = count($favorites);

        $comments = Comment::where([
            ['item_id', '=', $item_id->id],
        ])->get();
        $commentCount = count($comments);

        $buy = Buy::where([
            ['item_id', '=', $item_id->id],
        ])->get();
        if ($item[0]['user_id'] == $user['id']) {
            $buy_status = 1;
        } else if ($buy != "[]") {
            $buy_status = 2;
        } else {
            $buy_status = 0;
        }


        return view('detail', compact('item', 'categoryCount', 'favorite_status', 'favoriteCount', 'commentCount', 'buy_status'));
    }

    public function sell()
    {
        $categories = Category::all();
        $conditions = Condition::all();
        return view('sell', compact('categories', 'conditions'));
    }

    public function create(SellRequest $request)
    {
        $user = Auth::user();
        $categoryCount = count($request->category);
        $file_name = $request->file('image')->getClientOriginalName();
        if (! Storage::exists('public/' . $file_name)) {
            $request->file('image')->storeAs('public', $file_name);
        }

        $item = [
            'user_id' => $user['id'],
            'condition_id' => $request->condition,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $file_name,
        ];
        $create_item = Item::create($item);
        for ($id = 0; $id < $categoryCount; $id++) {
            $create_item->category()->attach($request->category[$id]);
        }
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Buy;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class MypageController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        $items = Item::where([
            ['user_id', '=', $user['id']],
        ])->get();
        $buys = Buy::with('item')->where([
            ['user_id', '=', $user['id']],
        ])->get();

        $itemsArray = $items->toArray();
        $itemsCount = count($itemsArray);

        $buysArray = $buys->toArray();
        $buysCount = count($buysArray);

        return view('mypage', compact('user', 'itemsArray', 'itemsCount', 'itemsCount', 'buysArray', 'buysCount'));
    }

    public function profile()
    {
        $user = Auth::user();
        $profile = Profile::where([
            ['user_id', '=', $user['id']],
        ])->get();
        if ($profile == "[]") {
            $profile = null;
        }

        return view('profile', compact('user', 'profile'));
    }

    public function edit(ProfileRequest $request)
    {
        $user = Auth::user();
        $profile = Profile::where([
            ['user_id', '=', $user['id']],
        ])->get();
        $edit = [
            'user_id' => $user['id'],
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building' => $request->building,
        ];
        if ($request->image != null) {
            $file_name = $request->file('image')->getClientOriginalName();
            if (! Storage::exists('public/' . $file_name)) {
                $request->file('image')->storeAs('public', $file_name);
            }
            $users = [
                'name' => $request->name,
                'image' => $file_name,
            ];
        } else {
            $users = [
                'name' => $request->name,
            ];
        }

        if ($profile == "[]") {
            Profile::create($edit);
            User::find($user['id'])->update($users);
        } else {
            Profile::where([
                ['user_id', '=', $user['id']],
            ])->update($edit);
            User::find($user['id'])->update($users);
        }

        return redirect(route('mypage.mypage', [
            'user_id' => $user['id'],
        ]));
    }
}

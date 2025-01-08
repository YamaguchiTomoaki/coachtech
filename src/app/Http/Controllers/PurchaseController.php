<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class PurchaseController extends Controller
{
    public function purchase(Item $item_id)
    {
        $item = Item::with('user', 'condition', 'category')->where([
            ['id', '=', $item_id->id],
        ])->get();
        $user = Auth::user();
        $profile = Profile::where([
            ['user_id', '=', $user['id']],
        ])->get();
        if ($profile == "[]") {
            $profile = null;
        }
        return view('purchase', compact('item', 'profile'));
    }

    public function address(Item $item_id)
    {
        $item_id = $item_id['id'];
        $user = Auth::user();
        $profile = Profile::where([
            ['user_id', '=', $user['id']],
        ])->get();
        if ($profile == "[]") {
            $profile = null;
        }

        return view('address', compact('user', 'profile', 'item_id'));
    }

    public function change(AddressRequest $request)
    {
        $user = Auth::user();
        $profile = Profile::where([
            ['user_id', '=', $user['id']],
        ])->get();
        $change = [
            'user_id' => $user['id'],
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building' => $request->building,
        ];

        if ($profile == "[]") {
            Profile::create($change);
        } else {
            Profile::where([
                ['user_id', '=', $user['id']],
            ])->update($change);
        }

        return redirect(route('purchase.purchase', [
            'item_id' => $request->item_id,
        ]));
    }
}

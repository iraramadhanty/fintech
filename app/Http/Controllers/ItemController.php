<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view("pages.canteen.index", compact("items"));
    }

    public function menu()
    {
        $items = Item::all();
        return view("pages.user.canteen", compact("items"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"  => "required|max:255",
            "price" => "required|numeric",
            "stock" => "required|numeric"
        ]);

        $item         = new Item();
        $item->name   = $request->name;
        $item->image  = $request->image;
        $item->price  = $request->price;
        $item->stock  = $request->stock;
        $item->desc   = $request->desc;
        $item->save();
        return redirect()->back();
    }

    public function update(Request $request, Item $item)
    {
        $item->name   = $request->name;
        $item->image  = $request->image;
        $item->price  = $request->price;
        $item->stock  = $request->stock;
        $item->desc   = $request->desc;
        $item->update();
        return redirect()->back();
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->back();
    }
}

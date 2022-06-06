<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $items = item::all();
        return view('items', compact('items'));
    }

    public function showAllItem(){
        $items = item::all();
        return view('items/index', compact('items'));
    }

    public function create(){
        $items = item::all();
        return view('items/index');
    }

    public function store(Request $request){
        Item::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/games/manage')->with('success', 'Item(s) Added Succesfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ItemsModel;

class PostItemController extends Controller
{
    
    public function PostItem(Request $request)
    {
    	$postItem = new ItemsModel();
	   	$postItem->image = $request->image;
    	$postItem->name = $request->name;
    	$postItem->description = $request->description;
    	$postItem->price = $request->price;
    	$postItem->save();

    	return redirect()->back();

    }

    public function getIndex ()
    {
    	$items = ItemsModel::get();


    	return view('index', ['items' => $items ]);
    }

    public function getTotal(Request $request)
    {
    	dd($request->total);
    }
}

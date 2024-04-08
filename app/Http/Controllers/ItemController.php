<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function items($id){
        $items=items::where('group_id',$id)->get();
           $item_arr=['id'=>$id,'items'=>$items];
        return view('items')->with('items',$item_arr);
    }

    public function addItem(Request $request){
        $valid=$request->validate(([
            'name'=>'required',
            'count'=>'required'
        ]));
        $item=new items();
        $item->group_id=$request->group_id;
        $item->item_name=$valid['name'];
        $item->count=$request->count;
        $item->price=$request->price;
        $item->save();
        return redirect()->route('items',$request->group_id);
    }
}

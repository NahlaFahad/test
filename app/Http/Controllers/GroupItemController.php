<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Groupitems;
use Illuminate\Http\Request;

class GroupItemController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('POST')){
           // return "sd";
            $vaild=$request->validate([
                'name'=>'required'
            ]);
            $group=new Groupitems();
            $group->group_name=$vaild['name'];
            if($group->save()) return redirect()->route('group');
           // return "Sds";
            return redirect()->route('group');
        }
        $groups=Groupitems::all();
        return view('group')->with('groups',$groups);
    }

    public function updateGroup($id){
        $group=Groupitems::find($id);
        return view("updateGroup")->with('group',$group);
    }
    public function update(Request $request) {
        $group=Groupitems::find($request->groupid);
        $group->group_name=$request->name;
        $group->save();
        return redirect()->route('group');
    }
}

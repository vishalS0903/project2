<?php

namespace App\Http\Controllers;
use App\Models\Rock;
use Illuminate\Http\Request;

class RockController extends Controller
{
    public function store(Request $request){
        $product= new Rock;
        $product-> fname=$request->fname;
        $product-> lname=$request->lname;
        $product-> mobile=$request->mobile;
        $product-> add=$request->add;
        $product-> save();
    }
}

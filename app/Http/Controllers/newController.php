<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function getRout()
    {

//        $this->validate ($request, [
//            'title' => 'required|unique|max:255',
//            'body' => 'required',
//        ]);

        return view('rout', ['value' => 'random text']);
    }
}

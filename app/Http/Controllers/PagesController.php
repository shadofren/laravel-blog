<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about')->with([
            'first' => 'First',
            'last' => 'Last'
        ]);
    }

    public function contact(){
        return view('pages.contact');

    }
}

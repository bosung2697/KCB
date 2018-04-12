<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgreementController extends Controller
{
    public function index(){
        return view('/auth/agreement');
    }
    public function showProfile(Request $request, $agreement){
        $value=$request->session()->get('agreement', true);

    }
}

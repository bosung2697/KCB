<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI

        $articles = Article::where('name','like','%'.$search.'%')
            ->orderBy('name')
            ->paginate(20);

        return view('articles.index',compact('articles'));
    }
}

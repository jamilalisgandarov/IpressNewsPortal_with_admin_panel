<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\Http\Requests;

class HomePageController extends Controller
{
    public function index()
    {
    	$newsAll =News::all();
    	return view('website.index',compact('newsAll'));
    	
    }
    public function show(News $news)
    {
    	$newsAll =News::all();
    	return view('website.news',compact('newsAll','news'));
    }
}

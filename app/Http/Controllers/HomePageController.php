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
    	$category=Category::all();
    	return view('website.index',compact('newsAll'));
    	
    }
}

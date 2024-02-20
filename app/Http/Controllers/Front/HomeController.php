<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.index', [
            'latest_post' => Article::with(['User', 'Category'])->latest()->first(),
            'article' => Article::with(['User', 'Category'])->where('status', '1')->latest()->paginate(4),
            'categories' => Category::latest()->get(),


        ]);
    }

    public function about(){
        return view('front.home.about', [
            'categories' => Category::latest()->get(),



        ]);
    }

    public function blog()
    {
        return view('front.home.blog', [
            'latest_post' => Article::with(['User', 'Category'])->latest()->first(),
            'article' => Article::with(['User', 'Category'])->where('status', '1')->latest()->paginate(4),
            'categories' => Category::latest()->get(),
        ]);
    }

}

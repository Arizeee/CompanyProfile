<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        
        $keyword = request()->keyword;
        // dd($keyword);
        if ($keyword) {
            $article = Article::with('Category')
                        ->whereStatus(1)
                        ->where('title', 'like', '%'.$keyword.'%')
                        ->latest()
                        ->paginate(3);
        } else {
            $article = Article::with('Category')->where('status', '1')->latest()->paginate(4);
        }
        return view('front.article.index',[
            'article' => $article,
            'keyword' => $keyword,
            

        ]);
    }
    public function show($slug){
        $article =  Article::whereSlug($slug)->firstOrFail();
        $article->increment('views');
        return view('front.article.show',[
            'article' => $article,
            'categories' => Category::latest()->get(),
            

        ]);
    }
}

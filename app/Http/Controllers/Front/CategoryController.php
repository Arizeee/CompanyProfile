<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($slugCategory){
            return view('front.category.index', [
                'articles' => Article::with(['Category', 'User'])->whereHas('Category', function($q) use ($slugCategory){
                    $q->where('slug', $slugCategory);
                })->latest()->paginate(9),
                'category' => $slugCategory,
            

            ]);
        
    }
}

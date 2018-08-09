<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function Index()
    {
        $news = News::with(['media'])->active()->orderBy('created_at', 'desc')->get();

        return view('frontend.news.index', compact('news'));
    }

    public function getNews($news)
    {
        $news = News::with(['media'])->active()->find($news);

        return view('frontend.news.news', compact('news'));
    }
}

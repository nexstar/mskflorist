<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at', 'desc')->get();
        return view('news.index',compact('news'));
    }

    public function subindex($id){
        $news = News::findOrFail($id);

        $news->push('point', [ 'date' => time()]);
        $news->update();

        return view('news.subindex', compact('news'));
    }

}

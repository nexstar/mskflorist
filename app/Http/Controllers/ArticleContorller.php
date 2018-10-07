<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleContorller extends Controller
{

    public function index(){
        $article = Article::orderBy('created_at', 'desc')->where('onffonline', '1')->paginate(9);
        return view('articles.index',compact('article'));
    }

    public function subindex($id){
        $article = Article::findOrFail($id);

        $article->push('point', [ 'date' => time()]);
        $article->update();

        $fbshareurl = env('SERVER_IMAGE_PATH')."/articles/sub/".$id;
        return view('articles.subindex',compact('article','fbshareurl'));
    }

    public function assign($assign){

        if(0 == $assign){
            return redirect('/articles');
        }else{
            $article = Article::where('type', $assign)->where('onffonline','1')->orderBy('created_at', 'desc')->paginate(9);
            return view('articles.index',compact('article'));
        }
    }

}

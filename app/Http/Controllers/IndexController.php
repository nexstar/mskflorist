<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HotArticle;
use App\Article;

use App\HotProduct;
use App\Product;

use App\Slide;

class IndexController extends Controller
{
    public function index(){

        $slide = Slide::all();

        $hotproduct = HotProduct::all();
        $ShowProDuct = [];
        foreach ($hotproduct as $hotproductlist){
            $product = Product::findOrFail($hotproductlist->productid);
            array_push($ShowProDuct,
                array(
                    'id' => $product->_id,
                    'src' => $product->src,
                    'title' => $product->title
                )
            );
        };

        $hotarticle = HotArticle::all();
        $ShowArticle = [];
        foreach ($hotarticle as $hotarticlelist){
            $articles = Article::findOrFail($hotarticlelist->articleid);
            array_push($ShowArticle,
                array(
                    'id' => $articles->_id,
                    'src' => $articles->picloadjson['img'],
                    'title' => $articles->title,
                    'content' => $articles->contents
                )
            );
        };

        return view('welcome',compact('slide','ShowProDuct','ShowArticle'));
    }
}

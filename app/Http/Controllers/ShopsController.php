<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Product;
use App\Classify;
use App\pdsmallitem;
use App\pdbigitem;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ShopsController extends Controller
{

    public function itemclassify($id,$tpye){

//      0 => 小項, 1 => 分類
        if( ((int) $tpye) ){
            $classify = Classify::findOrFail($id);
            $itemclassify_name = $classify->name;

            $producthub = collect($classify->addcheckboxgroup)->map(function ($group){
                $product  = Product::findOrFail($group['id']);
                return $product;
            });
            $page = 1;
            $perPage = 50;
            $options = [
              'path' => LengthAwarePaginator::resolveCurrentPath()
            ];
            $products = new LengthAwarePaginator($producthub->forPage($page,$perPage),$producthub->count(),$perPage,$page,$options);

        }else{
            $pdsmallitem_name = pdsmallitem::findOrFail($id);
            $itemclassify_name = $pdsmallitem_name->name;
            $products = Product::where('pdsmallitem',$pdsmallitem_name->name)
                        ->orderBy('created_at','desc')
                        ->paginate(15);
        };

        $subviewlefttool = $this->subviewlefttool();

        return view('shops.itemclassify',compact('subviewlefttool','itemclassify_name','products'));
    }

    public function subviewlefttool(){
        $pdbigitem = pdbigitem::all();

        $subviewTmp = [];
        foreach ($pdbigitem as $pdbigitemlist){
            $pdsmallitem = pdsmallitem::where('bigname', $pdbigitemlist->name)->get();
            $subpdsmallitem = [];
            foreach ($pdsmallitem as $pdsmallitemlist){
                array_push($subpdsmallitem,
                    array(
                        'id' => $pdsmallitemlist->_id,
                        'name' => $pdsmallitemlist->name
                    )
                );
            };
            array_push($subviewTmp,
                array(
                    'pdbigitem' => $pdbigitemlist->name,
                    'pdsmallitem' => $subpdsmallitem
                )
            );
        };

        return $subviewTmp;
    }

    public function index(){
        $products = Product::orderBy('created_at','desc')->paginate(15);

        $subviewlefttool = $this->subviewlefttool();

        return view('shops.index',compact('products','subviewlefttool'));
    }

    public function highttolow(){
        $products = Product::orderBy('money','desc')->get();
        return view('shops.index',compact('products'));
    }

    public function lowtohight(){
        $products = Product::orderBy('money','asc')->get();
        return view('shops.index',compact('products'));
    }

    public function hotstatus(){
        $products = Product::orderBy('buycount','desc')->get();
        return view('shops.index',compact('products'));
    }

    public function subindex($id,$type){

        $tmpTimeslot = [];
        $courses = "";
        $products = "";
        $productaddgc = [];
        if($type){
            $courses = Course::findOrFail($id);
            $_couse_product = $courses->Timeslot;
            for($i=0;$i<count($_couse_product);$i++) {
                if ( ($_couse_product[$i]['year'] >= ((int)date('Y'))) ) {

                    //月份 >
                    if ( ($_couse_product[$i]['month'] > ((int)date('n'))) ){
                        $_ymdh = $_couse_product[$i]['year'].'年'.$_couse_product[$i]['month'].'月'.$_couse_product[$i]['day'].'日'.$_couse_product[$i]['hour'].'點';
                    };

                    //月份 ==
                    if ( ($_couse_product[$i]['month'] == ((int)date('n'))) ) {
                        //月份 >=
                        if ( ($_couse_product[$i]['day'] >= ((int)date('j'))) ) {
                            $_ymdh = $_couse_product[$i]['year'].'年'.$_couse_product[$i]['month'].'月'.$_couse_product[$i]['day'].'日'.$_couse_product[$i]['hour'].'點';
                       };
                    };

                };
                $tmpTimeslot[$_ymdh] = $_ymdh;
            };
        }else{
            $products = Product::findOrFail($id);

            for ($i=0;$i<count($products->addpd);$i++){
                // get add product info
                $pdgc = Product::findOrFail($products->addpd[$i]['pdid']);
                array_push($productaddgc,
                    array(
                        'id' => $pdgc->_id,
                        'title' => $pdgc->title,
                        'src' => $pdgc->src,
                        'money' => $products->addpd[$i]['money'],
                    )
                );
            };

            $classifyhub = [];
            $classifys = Classify::where('addcheckboxgroup','elemMatch',[ 'name' => ['$eq' => $products->title] ])->get();
            foreach ($classifys as $classifyslist){
                array_push($classifyhub,
                    array(
                        "id" => $classifyslist->_id,
                        "name" => $classifyslist->name
                    )
                );
            };
        };

        $subviewlefttool = $this->subviewlefttool();

        return view('shops.subindex', compact('subviewlefttool','courses','products','productaddgc','classifyhub','type','tmpTimeslot'));
    }

    public function cart(){
        return view('shops.cartindex');
    }

    public function buy(){
        return view('shops.buyindex');
    }

}

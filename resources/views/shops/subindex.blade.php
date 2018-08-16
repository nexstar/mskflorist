@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-商店</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 5%;">
        <div class="row">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">凱特夫人商店</h4>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-9">
                <div class="row">

                    <div class="col-md-5">
                        <img src="http://placehold.it/1170x613" width="100%" style="border:1px solid #006737;">
                    </div>

                    <div class="col-md-7">

                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-10">
                                <p style="font-size: 2.4rem;color: #006737;margin-bottom: 20px;">AAA</p>
                                <p style="color: #AAAAAA;font-weight: 800;margin-bottom: 20px;">NT$ 500</p>
                                <p style="color: #006737;margin-bottom: 5px;">
                                    <span class="glyphicon glyphicon-ok">產品小敘述</span>
                                </p>
                                <p style="color: #006737;margin-bottom: 5px;">
                                    <span class="glyphicon glyphicon-ok">產品小敘述</span>
                                </p>
                                <p style="color: #006737;margin-bottom: 5px;">
                                    <span class="glyphicon glyphicon-ok">產品小敘述</span>
                                </p>
                            </div>
                        </div>

                        @if($type === "1")
                            {{--課程選項--}}
                            <div class="row" style="margin-bottom: 5%;">

                                <div class="col-md-4" style="text-align: center;height: 34px;">
                                    <p style="margin: 5px;">課程日期</p>
                                </div>

                                <div class="col-md-6">
                                    {!! Form::select('size', [0 => '2018/12/32 (五)', 1 => '2018/12/32 (日)'], 0, ['class' => 'form-control']) !!}
                                </div>

                            </div>
                        @else
                            <label>加購商品</label>
                            <div class="row" >
                                @for($i=0;$i<3;$i++)
                                    <div class="col-md-4" style="margin-bottom: 20px;">
                                        <img src="http://placehold.it/1170x613" style="width: 100%;">
                                        <div style="text-align: center;">
                                            <p>商品名稱</p>
                                            <p>加購價</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        @endif

                        <div class="row" >

                            <div class="col-md-10" style="margin-bottom: 25px;">
                                <input type="number" id="pdcounter" value="1" min=1 max=100 style="width: 60px;border: 1px solid #006737;padding-left: 10px;height:32px;margin-right: 10px;float: left;">
                                    <button class="btn" type="button" style="background-color: #006737;color: white;border-radius: 0;float: left;" onclick="AddCar()">加入購物車</button>
                                    <button class="btn" type="button" style="background-color: #006737;color: white;border-radius: 0;float: right;"onclick="gobuy()" >直接結帳</button>
                                <div style="clear: both;"></div>

                                {{--<div class="col-md-12" style="text-align: center;margin-bottom: 25px;">--}}
                                    {{--<button type="button" class="btn btn-block btn-danger disabled">商品已售完</button>--}}
                                {{--</div>--}}
                                <div class="col-md-2"></div>
                            </div>

                            <div class="col-md-10">
                                <p class="text-justify">分類:
                                    @for($i=0;$i<5;$i++)
                                        <a href="#">分類{{ $i }}</a>
                                    @endfor
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                {{--商品說明--}}
                <div class="row">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#intro">商品說明</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#cost_list">購物須知</a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div id="intro" class="tab-pane fade in active" style="padding:15px;border:1px solid #006737;border-top-width: 0;">
                            {{--課程介紹--}}
                            <p style="font-size: 25px;margin-bottom: 5px;">課程介紹</p>
                            <div style="padding-left: 25px;padding-right: 25px;">
                            @for($i=0;$i<2;$i++)
                                <h4 class="text-justify">營建署的「貸款負擔率」是以「中位數住宅總價貸款每月攤還額」換算「家戶月可支配所得中位數」，若低於30％，表示「可合理負擔」、30％至40％之間代表「負擔能力略低」；40％至50％之間代表「負擔能力偏低」；若超過50％表示「負擔能力過低」，等於是每月被房貸追著跑。 根據2018年第2季全台「貸款負擔率」數據，全台貸款負擔率為37.25%，較上季些微減少0.33個百分點，房價負擔能力維持於略低等級；而全台「房價所得比」則為9.08倍，較上季些微減少0.08倍。 第2季台北市貸款負擔率為61.54％，新北市貸款負擔率為52.3％，雙雙較上季增加。而雙北市目前貸款負擔率普遍屬於「負擔能力過低」，換句話說，北市一般房貸族每月所得有6成拿來繳房貸，新北購屋者則有5成多所得拿來繳貸款。</h4>
                                <img src="http://placehold.it/1170x613" style="width: 100%;">
                            @endfor
                            </div>
                        </div>

                        <div id="cost_list" class="tab-pane fade" style="padding:30px;border:1px solid #006737;border-top-width: 0;">
                            <h3 class="p_title">訂購須知:</h3>
                            <ul>
                                <li style="margin-bottom: 2%;">花禮訂購完成,會進入訂單排程,確認訂單所需材料等,與運送配車,若無特殊狀況（天災人禍,偏遠地區,資料不齊全,等因素）下,都不會再另行通知消費者囉！但如果您想更放心,也歡迎您聯繫我們熱情的客服人員喔！</li>
                                <li style="margin-bottom: 2%;">請於營業時間內聯繫我們熱情的客服人員，並於送花時間前2個工作天完成更改續。例如訂單送出時間是週五,您變更需在週三前完成喔！</li>
                                <li style="margin-bottom: 2%;">只要在訂單預訂送達日,48小時前,取消訂單,都可以全額退款喔！！</li>
                                <li style="margin-bottom: 2%;">預定送達時間48小時內24小時前取消訂單，則需酌收訂購金額30%備料費用。</li>
                                <li style="margin-bottom: 2%;">24小時內~請不要取消訂單了喔！因為訂單已經製作完畢了,是無法退款項的喔！真的是非常抱歉！！(若有特殊情況請與客服聯繫喔！！)</li>
                                <li style="margin-bottom: 2%;">每次的訂單僅含一次的配送喔,若因送花地址錯誤而造成配送當日,二次配送,因錯誤地址而造成額外的配送費用,依情況會再酌收運費喔！！</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-3">
                @include("layouts.shoprighttoolbar")
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection

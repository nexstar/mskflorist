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
                        @if($type)
                            <img src="{{ env('SERVER_IMAGE_PATH').'/images/course/'.$courses->imgjson['img'] }}" width="100%" style="border:1px solid #006737;">
                        @else
                            <img src="{{ env('SERVER_IMAGE_PATH').'/images/product/'.$products->src }}" width="100%" style="border:1px solid #006737;">
                        @endif
                    </div>

                    <div class="col-md-7">

                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-10">
                                @if($type)
                                    <p style="font-size: 2.4rem;color: #006737;margin-bottom: 20px;">{{ $courses->title }}</p>
                                    <p style="color: #AAAAAA;font-weight: 800;margin-bottom: 20px;">NT$ {{ $courses->money }}</p>
                                @else
                                    <p style="font-size: 2.4rem;color: #006737;margin-bottom: 20px;">{{ $products->title }}</p>
                                    <p style="color: #AAAAAA;font-weight: 800;margin-bottom: 20px;">NT$ {{ $products->money }}</p>
                                    <p style="color: #006737;margin-bottom: 5px;">
                                        <span class="glyphicon glyphicon-ok">產品小敘述</span>
                                    </p>
                                    <p style="color: #006737;margin-bottom: 5px;">
                                        <span class="glyphicon glyphicon-ok">產品小敘述</span>
                                    </p>
                                    <p style="color: #006737;margin-bottom: 5px;">
                                        <span class="glyphicon glyphicon-ok">產品小敘述</span>
                                    </p>
                                @endif
                            </div>
                        </div>

                        @if($type)
                            {{--課程選項--}}
                            <div class="row" style="margin-bottom: 5%;">
                                <div class="col-md-4" style="text-align: center;height: 34px;">
                                    <p style="margin: 5px;">課程日期</p>
                                </div>

                                <div class="col-md-6">
                                    {!! Form::select('size', $tmpTimeslot, 0, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        @else
                            <label>加購商品</label>
                            <div class="row" >
                                @for($i=0;$i<count($productaddgc);$i++)
                                    <div class="col-md-4">
                                        <div id="{{ "borderred".$productaddgc[$i]['id']}} " onclick="btncursor('{{ $productaddgc[$i]['id'] }}')" style="cursor: pointer;">
                                            <img src="{{ env('SERVER_IMAGE_PATH').'/images/product/'.$productaddgc[$i]['src'] }}" style="width: 100%;">
                                            <div style="text-align: center;">
                                                <p id="{{ "titlered".$productaddgc[$i]['id'] }}">{{ $productaddgc[$i]['title'] }}</p>
                                                <p id="{{ "titlemoney".$productaddgc[$i]['id']}}">{{ $productaddgc[$i]['money'] }}</p>
                                            </div>
                                        </div>
                                        <div id="borderredappend{{$productaddgc[$i]['id']}}"></div>
                                    </div>
                                @endfor
                            </div>
                        @endif

                        <div class="row" >
                            @if($type)
                                <div class="col-md-12" style="margin-bottom: 25px;margin-top: 20px;">
                                    @if(1)
                                        <input type="number" id="pdcounter" value="1" min=1 max=100 style="width: 60px;border: 1px solid #006737;padding-left: 10px;height:32px;margin-right: 10px;float: left;">
                                        <button class="btn" type="button" style="background-color: #006737;color: white;border-radius: 0;float: left;" onclick="AddCar()">加入購物車</button>
                                        <button class="btn" type="button" style="background-color: #006737;color: white;border-radius: 0;float: right;"onclick="gobuy()" >直接結帳</button>
                                        <div style="clear: both;"></div>
                                    @else
                                        <button type="button" class="btn btn-block btn-danger disabled">商品已售完</button>
                                    @endif
                                </div>
                            @else
                                @if( ((int) $products->inventory) > 6 )
                                    <div class="col-md-12" style="margin-bottom: 25px;margin-top: 20px;">
                                        <input type="number" id="pdcounter" value="1" min=1 max=100 style="width: 60px;border: 1px solid #006737;padding-left: 10px;height:32px;margin-right: 10px;float: left;">
                                        <button class="btn" type="button" style="background-color: #006737;color: white;border-radius: 0;float: left;" onclick="AddCar()">加入購物車</button>
                                        <button class="btn" type="button" style="background-color: #006737;color: white;border-radius: 0;float: right;"onclick="gobuy()" >直接結帳</button>
                                        <div style="clear: both;"></div>
                                    </div>
                                @else

                                @endif
                                <div class="col-md-12">
                                    <p class="text-justify">分類:
                                        @for($i=0;$i<count($classifyhub);$i++)
                                            <a href="{{ route('shops.itemclassify',[$classifyhub[$i]['id'],1]) }}">{{ $classifyhub[$i]['name'] }}</a>
                                        @endfor
                                    </p>
                                </div>
                            @endif
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
                                @if($type)
                                    <div class="row">
                                        @for($i=0;$i<count($courses->modelarray);$i++)
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div style="margin-bottom: 20px;border-left: 6px solid #5cb85c;background-color: #dddddd;">
                                                        <p style="margin-left: 10px;font-size: 15px;padding: 10px;color: #888888;">{{ $courses->modelarray[$i]['title'] }}</p>
                                                    </div>
                                                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/course/'.$courses->modelarray[$i]['src'] }}" style="width:100%;">
                                                    <p style="font-size: 15px;padding: 15px 15px 15px 0px;">{{ $courses->modelarray[$i]['contents'] }}</p>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                @else
                                    <div class="row">
                                        @for($i=0;$i<count($products->modelgc);$i++)
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div style="margin-bottom: 20px;border-left: 6px solid #5cb85c;background-color: #dddddd;">
                                                        <p style="margin-left: 10px;font-size: 15px;padding: 10px;color: #888888;">{{ $products->modelgc[$i]['title'] }}</p>
                                                    </div>
                                                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/product/'.$products->modelgc[$i]['src'] }}" style="width:100%;">
                                                    <p style="font-size: 15px;padding: 15px 15px 15px 0px;">{{ $products->modelgc[$i]['contents'] }}</p>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                @endif
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
                @include("layouts.shoprighttoolbar",$subviewlefttool)
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        var _cursorid = "";
        var cursorarrayid      = [];
        var cursorarraypdid    = [];
        var cursorarraypdmoney = [];

        function btncursor(id) {
            _cursorid = id;
            console.log(_cursorid);
            let _titlered   = $("#titlered"+id).val();
            let _titlemoney = $("#titlemoney"+id).val();
            cursorarrayid.push(id);
            cursorarraypdid.push(_titlered);
            cursorarraypdmoney.push(_titlemoney);
            $("#borderred"+id).css({ "border": "1px solid red"});
        };

        function addborderred() {
            let _addreddiv  = "";
                _addreddiv += '<input  name="addpdhiddenid[]" type="hidden" value="">';
                _addreddiv += '<input  name="addpdhiddenmoney[]" type="hidden" value="">';
            $("#borderredappend"+_cursorid).append(_addreddiv);
        };

    </script>

@endsection

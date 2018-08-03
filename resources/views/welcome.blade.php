@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚</title>
@endsection

@section('contents')

    {{-- 幻燈片 --}}
    <div class="container-fluid after_nav" style="padding: 0;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" style="max-height: 450px;">
                <div class="item active">
                    <img src="http://placehold.it/1170x613" alt="錯誤載入" style="width:100%;height:450px;cursor: default;">
                </div>
                <div class="item">
                    <img src="http://placehold.it/1170x613" alt="錯誤載入" style="width:100%;height:450px;cursor: default;">
                </div>
                <div class="item">
                    <img src="http://placehold.it/1170x613" alt="錯誤載入" style="width:100%;height:450px;cursor: default;">
                </div>
                <div class="item">
                    <img src="http://placehold.it/1170x613" alt="錯誤載入" style="width:100%;height:450px;cursor: default;">
                </div>
            </div>
        </div>
    </div>

    {{-- 熱銷商品 --}}
    <div class="container" style="border-bottom:1px solid #e0e0eb;">
        <div style="text-align: center;margin-top: 20px;margin-bottom: 20px;">
            <h4 style="font-size: 3rem;color: #006737;">熱銷商品</h4>
        </div>
        <div class="row" style="padding-bottom: 20px;">
            @for($i=0;$i<4;$i++)
                <div class="col-md-3">
                    <img src="http://placehold.it/1170x613" alt="照片" width="100%" style="cursor: default;">
                    <div style="text-align: center;margin:10px 0 10px 0;">
                        <p style="font-size: 1.8rem;color: #006737;">商品敘述</p>
                    </div>
                    <div style="text-align: center;">
                        <a href="#" class="btn" style="color: #5e5e5e;background-color: #dcdcdc;border-radius: 0;">了解詳情&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    {{-- 熱門文章 --}}
    <div class="container" style="border-bottom:1px solid #e0e0eb;">
        <div style="text-align: center;margin-top: 20px;margin-bottom: 20px;">
            <h4 style="font-size: 3rem;color: #006737;">熱門文章</h4>
        </div>
        <div class="row" style="padding-bottom: 20px;">
            @for($i=0;$i<4;$i++)
                <div class="col-md-3" style="text-align: center">
                    <a href="#">
                        <img src="http://placehold.it/1170x613" alt="照片" width="100%" style="cursor: default;">
                        <div style="text-align: center;margin:10px 0 10px 0;">
                            <p style="font-size: 1.8rem;color: #006737;">文章標題</p>
                        </div>
                        <div>
                            <p class="text-justify">文章說明</p>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>

@endsection

@section('scripts')

@endsection

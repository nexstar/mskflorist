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
            </ol>
            <div class="carousel-inner" style="max-height:500px;">
                <div class="item active">
                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/slide/'.$slide[0]->src }}" alt="錯誤載入" style="width:100%;height:100%;cursor: default;">
                </div>
                <div class="item">
                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/slide/'.$slide[1]->src }}" alt="錯誤載入" style="width:100%;height:100%;cursor: default;">
                </div>
                <div class="item">
                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/slide/'.$slide[2]->src }}" alt="錯誤載入" style="width:100%;height:100%;cursor: default;">
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
            @for($i=0;$i<count($ShowProDuct);$i++)
                <div class="col-md-3">
                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/product/'.$ShowProDuct[$i]['src'] }}" alt="照片" width="100%" style="cursor: default;">
                    <div style="text-align: center;margin:10px 0 10px 0;">
                        <p style="font-size: 1.8rem;color: #006737;">{{ $ShowProDuct[$i]['title'] }}</p>
                    </div>
                    <div style="text-align: center;">
                        <a href="{{ route('shops.subindex', ['id' => $ShowProDuct[$i]['id'], 'type' => 0]) }}" class="btn" style="color: #5e5e5e;background-color: #dcdcdc;border-radius: 0;">了解詳情&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
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
            {{--hotarticle--}}
            @for($i=0;$i<count($ShowArticle);$i++)
                <div class="col-md-3" style="cursor: pointer;text-align: center;">
                    <a style="color: black;" href="{{ route('articles.subindex', $ShowArticle[$i]['id']) }}">
                        <img src="{{ env('SERVER_IMAGE_PATH').'/images/article/'.$ShowArticle[$i]['src'] }}" alt="錯誤" width="100%">
                        <div style="text-align: center;margin:10px 0 10px 0;">
                            <p style="font-size: 1.8rem;color: #006737;">
                                @if(mb_strlen( $ShowArticle[$i]['title']) < 33)
                                    {{ $ShowArticle[$i]['title'] }}
                                @else
                                    {{ mb_substr($ShowArticle[$i]['title'],0,30,"utf-8").'...' }}
                                @endif
                            </p>
                        </div>
                        <div>
                            <p>
                                @if(mb_strlen( $ShowArticle[$i]['content']) < 33)
                                    {{ $ShowArticle[$i]['content'] }}
                                @else
                                    {{ mb_substr($ShowArticle[$i]['content'],0,30,"utf-8").'...' }}
                                @endif
                            </p>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>

	@include('layouts.iconlist')
@endsection
@section('scripts')
@endsection

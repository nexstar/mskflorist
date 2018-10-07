@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-媒體報導</title>
@endsection

@section('contents')

    <div class="container after_nav">
        <div class="row">
            <div style="text-align: center;margin-bottom: 40px;">
                <h4 style="font-size: 3rem;color: #006737;">媒體報導</h4>
            </div>
        </div>
        <div class="container" style="margin-top: 20px;">
            <div class="row" style="margin-bottom: 20px;">

                @foreach($news as $newslist )
                <div class="col-md-4" style="margin-bottom: 20px;">
                    <div style="text-align: center;">
                        <img src="{{ env('SERVER_IMAGE_PATH').'/images/new/'.$newslist->left['url'] }}" alt="錯誤" width="100%">
                    </div>
                    <h4>
                        @if(mb_strlen($newslist->title) < 30)
                            {{ $newslist->title }}
                        @else
                            {{ mb_substr($newslist->title,0,30,"utf-8").'...' }}
                        @endif
                    </h4>

                    <a href="{{ route('news.subindex', $newslist->_id) }}" class="btn" style="color: #5e5e5e;background-color: transparent;border-radius: 0;border: 1px solid #5e5e5e;">Read&nbsp;More</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <style type="text/css">
        /*@media screen and (min-width: 768px) {*/
            /*.cfooter{*/
                /*position : fixed;*/
                /*bottom : 0;*/
                /*width : 100%;*/
            /*}*/
        /*}*/
    </style>
@endsection

@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-媒體報導</title>
@endsection

@section('contents')

    <div class="container after_nav">
        <div class="row">
            <div style="text-align: center;margin-bottom: 40px;">
                <h4 style="font-size: 3rem;color: #006737;">新聞標題</h4>
            </div>
        </div>
        <div class="container-fluid" style="border-bottom:1px solid #e0e0eb;padding: 0;">

            <div class="col-md-12" style="text-align: center;margin-bottom: 5%;">
                <img src="{{ env('SERVER_IMAGE_PATH').'/images/new/'.$news->left['url'] }}" style="width: 50%;">
            </div>

            <div class="col-md-6 col-md-offset-3" style="text-align: center;">
                <img src="{{ env('SERVER_IMAGE_PATH').'/images/new/'.$news->right['url'] }}" style="width:100%;height: 900px;border: 1px solid #dddddd">
            </div>

            <div class="col-md-12" style="text-align: left;font-size: 15px;margin:5% 0;">
                <p>新聞網址：<a target="_blank" href="{{ $news->ref }}">參考文獻</a></p>
            </div>

        </div>
    </div>

@endsection

@section('scripts')



@endsection

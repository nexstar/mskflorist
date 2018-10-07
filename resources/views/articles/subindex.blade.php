@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-文章</title>
@endsection

@section('contents')

    <div class="container after_nav">

        <div class="row">
            <div style="text-align: center;margin-bottom: 20px;margin-top: 20px;">
                <p style="font-size: 20px;color: #006737;">{{ $article->title }}</p>
            </div>
        </div>

        <div class="row" style="margin-bottom: 20px;">

            <div class="col-md-8 col-md-offset-2">

                <div class="col-md-12">
                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/article/'.$article->picloadjson['img'] }}" style="width: 100%;"/>
                    <p class="text-justify" style="font-size: 15px;padding: 15px 0px 15px 0px;">{{ $article->contents }}</p>
                </div>

                @for($i=0; $i<count($article->introductionjson);$i++)
                    <div class="col-md-12">
                        <div class="form-group">
                            <div style="margin-bottom: 20px;border-left: 6px solid #5cb85c;background-color: #dddddd;">
                                <p style="margin-left: 10px;font-size: 15px;padding: 10px;color: #888888;">{{ $article->introductionjson[$i]['title'] }}</p>
                            </div>
                            <img src="{{ env('SERVER_IMAGE_PATH').'/images/article/'.$article->introductionjson[$i]['picaddress'] }}" style="width:100%;">
                            <p style="font-size: 15px;padding: 15px 15px 15px 0px;">{{ $article->introductionjson[$i]['contents'] }}</p>
                        </div>
                    </div>
                @endfor

                <div class="col-md-12" style="text-align: right;">
                    <a target="_blank" href="{{ 'https://www.facebook.com/share.php?u='.$fbshareurl }}" style="font-size: 25px;text-decoration: none;">
                        <i class="fab fa-facebook-square" aria-hidden="true"></i>
                        <span>分享</span>
                    </a>
                </div>

            </div>

        </div>
    </div>

@endsection

@section('scripts')

@endsection

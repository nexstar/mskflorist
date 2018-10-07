@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-文章</title>
@endsection

@section('contents')
    <div class="container after_nav">
        <div class="row">
            <div style="text-align: center;margin-bottom: 40px;">
                <h4 style="font-size: 3rem;color: #006737;">凱特夫人文章</h4>
            </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 20px;">
            <div style="border-top: 1px solid #e7e7e7;border-bottom: 1px solid #e7e7e7;" id="wrapper">
                <ul>
                    <li><a href="{{ route('articles.assign',0) }}">全部文章</a></li>
                    <li><a href="{{ route('articles.assign',1) }}">春季</a></li>
                    <li><a href="{{ route('articles.assign',2) }}">夏季</a></li>
                    <li><a href="{{ route('articles.assign',3) }}">秋季</a></li>
                    <li><a href="{{ route('articles.assign',4) }}">冬季</a></li>
                    <li><a href="{{ route('articles.assign',5) }}">照顧小秘訣</a></li>
                </ul>
            </div>
        </div>
        <div class="row" style="margin-bottom: 20px;">
            @foreach($article as $articlelist)
            <div class="col-md-4" style="margin-bottom: 20px;">
                <div style="text-align: center;">
                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/article/'.$articlelist->picloadjson['img'] }}" style='width: 100%;'>
                </div>
                <h4>
                    @if(mb_strlen($articlelist->title) < 30)
                        {{ $articlelist->title }}
                    @else
                        {{ mb_substr($articlelist->title,0,30,"utf-8").'...' }}
                    @endif
                </h4>
                <a href="{{ route('articles.subindex', $articlelist->_id) }}" class="btn" style="color: #5e5e5e;background-color: transparent;border-radius: 0;border: 1px solid #5e5e5e;">Read&nbsp;More</a>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                {!! $article->links() !!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection

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
                    <li><a href="＃">全部文章</a></li>
                    <li><a href="＃">春季</a></li>
                    <li><a href="＃">夏季</a></li>
                    <li><a href="＃">秋季</a></li>
                    <li><a href="＃">冬季</a></li>
                    <li><a href="＃">照顧小秘訣</a></li>
                </ul>
            </div>
        </div>
        <div class="row" style="margin-bottom: 20px;">
            @for($i=0;$i<12;$i++)
            <div class="col-md-4" style="margin-bottom: 20px;">
                <div style="text-align: center;">
                    <img src="http://placehold.it/1170x613" alt="錯誤" style='width: 100%;'>
                </div>
                <h4>文章標題</h4>
                <p style="color: #999999;"></p>
                <a href="{{ route('articles.sub', $i) }}" class="btn" style="color: #5e5e5e;background-color: transparent;border-radius: 0;border: 1px solid #5e5e5e;">Read&nbsp;More</a>
            </div>
            @endfor
        </div>
    </div>

@endsection

@section('scripts')

@endsection

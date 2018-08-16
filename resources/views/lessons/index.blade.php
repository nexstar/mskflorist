@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-課程</title>
@endsection

@section('contents')

    <div class="container after_nav">
        <div style="text-align: center;margin-bottom: 40px;">
            <h4 style="font-size: 3rem;color: #006737;">凱特夫人課程</h4>
        </div>
        <div class="container-fluid" style="padding-bottom: 5px;">
            <div style="border-top: 1px solid #e7e7e7;border-bottom: 1px solid #e7e7e7;" id="wrapper">
                <ul>
                    <li><a href="#">全部課程</a></li>
                    <li><a href="#">當期課程</a></li>
                    <li><a href="#">歷史課程</a></li>
                </ul>
            </div>
        </div>
        @for($i=0;$i<10;$i++)
        <div class="col-md-6" style="margin-bottom: 20px;margin-top:20px;">
            <a href="{{ route('lessons.sub', $i) }}" style="text-decoration: none;">
                <img src="http://placehold.it/1170x613" width="100%" style="margin-bottom: 10px;">
                <p data-toggle="tooltip" data-placement="bottom" title="課程敘述" style="color: #006737;font-size: 2rem;">課程敘述</p>
            </a>
            <hr style="margin-top: 0px;margin-bottom: 0px;">
            <p style="color: #999999;">開課時間: 2018.02.22 | 2018.02.22 </p>
        </div>
        @endfor
    </div>

@endsection

@section('scripts')

@endsection


@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-來自朋友們的肯定</title>
@endsection

@section('contents')

    <div class="container after_nav">
        <div class="row" style="padding: 0 15px 0 15px;">
            <div style="text-align: center;margin-bottom: 20px;">
                <h4 style="font-size: 4rem;color: #006737;">來自朋友們的肯定</h4>
            </div>
            <div style="text-align: center;margin-bottom: 20px;">
                <img src="http://placehold.it/1170x613" width="100%">
            </div>
            <br/>
            <h4>來自朋友們的肯定，讓我們持續前進</h4>
            <h4>感謝各位給於<u>凱特夫人</u>網路花店，一點點肯定、一點點建議，對我們來說都很深刻、都會轉化為成長的動力。</h4><h4>我們盡力做到最好，希望有一天也能收到你的聲音。</h4>
            <br/>
            <div style="margin-bottom: 20px; text-align: center">
                @for($i=0;$i<10;$i++)
                <img src="http://placehold.it/1170x613" style="width:100%;margin-bottom: 20px;">
                @endfor
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection

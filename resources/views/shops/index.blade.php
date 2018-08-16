@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-商店</title>
@endsection

@section('contents')

    <div class="container after_nav">

        <div class="row">
            <div style="text-align: center;margin-bottom: 60px;">
                <h4 style="font-size: 3rem;color: #006737;">凱特夫人商店</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-xs-9">
                <div style="margin-top: 20px;">
                    <p style="float: left;">顯示 0-155 筆結果中的 12筆</p>
                    <select id="SelectType" class="form-control" style="float: right;width: 200px;">
                        <option value="0" selected disabled>尚未選商品排序</option>
                        <option value="1">依上架時間</option>
                        <option value="2">依價格排序:低至高</option>
                        <option value="3">依價格排序:高至低</option>
                        <option value="4">依熱銷度</option>
                    </select>
                    <div style="clear: both;"></div>
                </div>
                <div class="row" style="margin-top: 20px;">

                    @for($i=0;$i<18;$i++)
                    <div class="col-md-4 col-xs-4" style="margin-bottom:20px;">
                        <a href="{{ route('shops.sub', ['id' => $i, 'type' => 0]) }}">
                            <img src="http://placehold.it/1170x613"  style="width:100%;">
                            <p style="color: black;cursor: default;text-align: center;">商品標題</p>
                            <p style="color: black;cursor: default;text-align: center;">NT$200</p>
                        </a>
                    </div>
                    @endfor

                </div>

            </div>
            <div class="col-md-3 col-xs-3">
                @include("layouts.shoprighttoolbar")
            </div>
        </div>
    </div>

@endsection

@section('scripts')



@endsection

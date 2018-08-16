@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-購物車</title>
@endsection

@section('contents')

    <div class="container after_nav">

        <div class="row" style="padding: 0 15px 0 15px;">
            <h3 class="p_title" style="text-align: center;font-size: 4rem;">購物車</h3>
            <div style="height: 20px;"></div>
            <div class="col-md-6 col-md-offset-3">
                <img src="http://placehold.it/1170x613" style="width: 100%;">
            </div>
        </div>


        <div class="row" style="padding: 0 15px 0 15px;">
            <h3 style="text-align: center;">
                <a class="p_title" href="#">Good Choice! 選的好! 繼續購物</a>
            </h3>
        </div>

        {{-- 選擇商品--}}
        <div class="row" style="margin: 5% 0px;padding: 0 15px 0 15px;">
            {{--商品--}}
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>類型</th>
                            <th>名稱</th>
                            <th>價格</th>
                            <th>數量</th>
                            <th>刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Type1</td>
                            <td>測試1</td>
                            <td>300</td>
                            <td>30</td>
                            <td>
                                <button class="btn btn-danger">刪除</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{--購物車總計--}}
        <div class="row" style="padding: 0 15px 0 15px;margin-bottom: 40px;">
            <div style="text-align: center;">
                <a href="{{ url('shops/buy') }}" type="button" class="btn btn-primary">前往結帳</a>
            </div>
        </div>

        {{--<div class="col-md-12" style="text-align: center;">--}}
            {{--<h3 style="text-align: center;margin-top: 40px;margin-bottom: 60px;">您的購物車裡還沒有任何商品。</h3>--}}
        {{--</div>--}}

    </div>

@endsection

@section('scripts')
    <style type="text/css">
        th, td {
            text-align: center;
            font-size: 15px;
        }
    </style>
@endsection

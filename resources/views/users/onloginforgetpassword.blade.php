@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-信箱驗證並重置密碼</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 5%;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">信箱驗證並重置密碼</h4>
            </div>
        </div>

        <div class="col-md-4 col-md-offset-4" style="margin-top: 2%;margin-bottom: 20px;">
            <div class="form-group">
                <label for="email">輸入信箱</label>
                <input type="text" class="form-control" id="email" placeholder="輸入信箱">
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-block btn-primary">送出</button>
            </div>

        </div>

    </div>

@endsection

@section('scripts')
    <style type="text/css">
        @media (min-width: 750px) {
            .cfooter{
                position : fixed;
                bottom : 0;
                width : 100%;
            }
        }
    </style>
@endsection

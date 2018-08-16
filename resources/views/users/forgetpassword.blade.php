@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-忘記密碼</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">重置忘記密碼</h4>
            </div>
        </div>

        <div class="col-md-4 col-md-offset-4" style="margin-top: 2%;margin-bottom: 20px;">
            <div class="form-group">
                <label for="pwd">新密碼</label>
                <input type="text" class="form-control" id="pwd" placeholder="請輸入新密碼">
            </div>
            <div class="form-group">
                <label for="repwd">再次輸入</label>
                <input type="text" class="form-control" id="repwd" placeholder="再次輸入密碼">
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-block btn-primary">更換</button>
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

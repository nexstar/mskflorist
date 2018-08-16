@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-關於</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">
        <div class="row">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">我們在哪裡</h4>
            </div>
        </div>
        <div style="height: 20px;"></div>
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-4 col-md-offset-4">
                <img src="http://placehold.it/1170x613" style="width: 100%;margin-bottom: 20px;">
                <div style="text-align: center;">
                    <h4 class="p_title">本店</h4>
                    <p>02-7730-9968</p>
                    <p>台北市中山區林森北路487號212室</p>
                </div>
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

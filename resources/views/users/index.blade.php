@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-用戶</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">會員專區</h4><br/>
                {{-- <h4 style="font-size: 2rem;color: red;">提醒您！本網站絕不會主動以電話或簡訊通知顧客變更付款方式。</h4><br/> --}}
            </div>
        </div>

        <div class="row" style="margin-bottom: 10px;">

            <div class="col-md-4" style="height: 251px;">
                <div class="panel panel-success" style="height: 100%;">
                    <div class="panel-heading">訂單相關</div>
                    <div class="panel-body">
                        <ul style="font-size: 20px">
                            <li><a href="{{ url('users/transaction') }}">交易紀錄清單</a></li>
                            <li><a href="{{ url('users/buy') }}">買過商品清單</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">用戶資料</div>
                    <div class="panel-body">
                        <ul style="font-size: 20px">
                            <li><a href="{{ url('users/account') }}">帳號管理(修)</a></li>
                            <li><a href="{{ url('users/password') }}">密碼更換</a></li>
                            <li><a href="{{ url('users/sms') }}" type="button">手機更換</a></li>
                            <li><a href="{{ url('users/address_book') }}">通訊錄管理</a></li>
                            <li><a href="{{ url('users/bonus') }}">紅利查詢</a></li>
                            <li><a href="{{ url('users/vat') }}">公司統編備忘</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="height: 251px;">
                <div class="panel panel-success" style="height: 100%;">
                    <div class="panel-heading">常見問題</div>
                    <div class="panel-body">
                        <ul style="font-size: 20px">
                            <li><a href="{{ url('termsconditions') }}">常見問題Q&A</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('scripts')
    <style type="text/css">
        .panel-body > ul > li > a {
            color: rgba(0,0,0,0.5);
            text-decoration: none;
        }
        @media (min-width: 750px) {
            .cfooter{
                position : fixed;
                bottom : 0;
                width : 100%;
            }
        }
    </style>
@endsection


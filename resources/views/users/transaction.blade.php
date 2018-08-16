@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-交易紀錄清單</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">交易紀錄清單</h4>
            </div>
        </div>

        <div class="row" style="margin-bottom: 20px;">
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>詳細</th>
                            <th>訂單編號</th>
                            <th>日期</th>
                            <th>訂單狀態</th>
                            <th>總價</th>
                            <th>付款</th>
                            <th>配送狀態</th>
                            <th>發票</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        @for($i=0;$i<15;$i++)
                        <tr>
                            <td>
                                <a href="{{ url('users/transaction/detail', $i) }}">點擊查閱</a>
                            </td>
                            <td>20180530013315</td>
                            <td>2018/05/30</td>
                            <td>訂單成立</td>
                            <td>$23,500</td>
                            <td>信用卡一次付清(付款完成)</td>
                            <td>運送中</td>
                            <td>
                                <a href="{{ url('users/transaction/invoice', $i) }}">發票內容</a>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <style type="text/css">
        th, td {
            text-align: center;
        }
    </style>
@endsection

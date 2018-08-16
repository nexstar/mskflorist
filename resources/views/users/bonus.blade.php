@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-紅利查詢</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">紅利查詢</h4>
            </div>
        </div>

        <div class="container" style="margin-bottom: 20px;">

            <div class="col-md-8 col-md-offset-2">

                <div class="col-md-4" style="margin-bottom: 2%;border-bottom: 1px solid #dddddd;border-top: 1px solid #dddddd;">
                    <h4>紅利： 99999點</h4>
                </div>

                <div class="col-md-4" style="margin-bottom: 2%;border-bottom: 1px solid #dddddd;text-align: center;border-top: 1px solid #dddddd;">
                    <h4>比例 300點:1元</h4>
                </div>

                <div class="col-md-4" style="margin-bottom: 2%;border-bottom: 1px solid #dddddd;text-align: right;border-top: 1px solid #dddddd;">
                    <h4>折金： 450元</h4>
                </div>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>訂單時間</th>
                        <th>訂單編號</th>
                        <th>紅利數量</th>
                        <th>明細</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0;$i<15;$i++)
                    <tr>
                        <td>2017/08/14</td>
                        <td>598f5bf18ea46</td>
                        <td>999</td>
                        <td>
                            <a href="{{ url('users/bonus/detail', $i) }}">點擊明細</a>
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
        h4 {
            color:rgba(208,2,27,0.8);
        }
        th, td {
            text-align: center;
            font-size: 15px;
        }
    </style>
@endsection

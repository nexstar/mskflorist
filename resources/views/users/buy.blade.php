@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-買過商品清單</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">買過商品清單</h4>
            </div>
        </div>

        <div class="row" style="margin-bottom: 20px;">
            <div class="container">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>照片</th>
                        <th>品名</th>
                        <th>累積購買次數</th>
                        <th>現在售價</th>
                        <th>訂購</th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center;">
                    @for($i=0;$i<15;$i++)
                        <tr>
                            <td style="text-align: left;width:20%;">
                                <img src="http://placehold.it/1170x613" style="width: 100%;">
                            </td>
                            <td>Apple iPhone 7 Plus (32G)-曜石黑(MQU72TA/A)</td>
                            <td>1</td>
                            <td>$22999</td>
                            <td><a href="#">拜訪商品</a></td>
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

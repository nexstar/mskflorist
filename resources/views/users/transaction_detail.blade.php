@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-訂單資訊</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">訂單資訊</h4>
            </div>
        </div>

        <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>商名名稱</th>
                        <th>件數</th>
                        <th>單價</th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center;">
                    @for($i=0;$i<15;$i++)
                        <tr>
                            <td>DYAJ84-19008I7HC-000</td>
                            <td>
                                <a href="#" style="color:black;text-decoration:none;">Apple iPhone 7 Plus (32G)-曜石黑(MQU72TA/A)</a>
                            </td>
                            <td style="width:10%;">1件</td>
                            <td>$23,500</td>
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

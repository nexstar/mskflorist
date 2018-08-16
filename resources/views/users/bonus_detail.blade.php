@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-紅利查詢</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">紅利詳細資訊</h4>
            </div>
        </div>

        <div class="container" style="margin-bottom: 20px;">

            <div class="col-md-8 col-md-offset-2">

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>商品</th>
                        <th>編號</th>
                        <th>紅利數量</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0;$i<10;$i++)
                        <tr>
                            <td>Apple iPhone 7 Plus (32G)-曜石黑(MQU72TA/A)</td>
                            <td>598f5bf18ea46</td>
                            <td>999</td>
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

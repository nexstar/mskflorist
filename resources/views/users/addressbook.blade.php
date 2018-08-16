@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-通訊錄管理</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">通訊錄管理</h4>
            </div>
        </div>

        <div class="container" style="margin-bottom: 20px;">

            <div class="col-md-12">

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>收貨人姓名</th>
                        <th>收貨人電話</th>
                        <th>收貨人行動電話</th>
                        <th>郵政區碼</th>
                        <th>白天收件地址</th>
                        <th>動作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="width: 11.5%;">
                            <div class="col-md-12">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td style="width: 13.5%;">
                            <div class="col-md-12">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td style="width: 13.5%;">
                            <div class="col-md-12">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td style="width: 10%;">
                            <div class="col-md-12">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td style="width: 20%;">
                            <div class="col-md-12">
                                <button class="btn btn-block btn-primary">新增</button>
                            </div>
                        </td>
                    </tr>
                    @for($i=0;$i<5;$i++)
                        <tr>
                            <td>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="鄒年寶">
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="0972153032">
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="0972153032">
                                </div>
                            </td>
                            <td style="width: 10%;">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="30212">
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="新竹縣竹北市縣政十六街3號">
                                </div>
                            </td>
                            <td>
                                <div class="col-md-6">
                                    <button class="btn btn-block btn-danger">刪除</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-block btn-warning">修改</button>
                                </div>
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
        th, td, input {
            text-align: center;
        }
    </style>
@endsection

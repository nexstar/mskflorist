@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-公司統編備忘</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">公司統編備忘</h4>
            </div>
        </div>

        <div class="container" style="margin-bottom: 20px;">

            <div class="col-md-6 col-md-offset-3">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>公司統編</th>
                        <th>動作</th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        <tr>
                            <td style="font-size: 30px;">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value=""  style="font-size: 20px;text-align: center;">
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-primary">新增</button>
                                </div>
                            </td>
                        </tr>
                        @for($i=0;$i<15;$i++)
                        <tr>
                            {!! Form::open( ['method' => 'GET', 'files' => true] ) !!}
                            <td>
                                <div class="col-md-12">
                                    <input id="vat" name="vat" type="text" class="form-control" value="52580628" disabled="true"  style="font-size: 20px;text-align: center;">
                                </div>
                            </td>
                            <td>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-block btn-danger">刪除</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-block btn-warning">修改</button>
                                </div>
                            </td>
                            {!! Form::close() !!}
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

@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-會員</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">註冊會員</h4>
            </div>
        </div>

        <div class="col-md-6 col-md-offset-3" style="margin-bottom: 20px;">

            {!! Form::open( ['method' => 'POST', 'files' => true] ) !!}

            <div class="col-md-6" style="border-bottom: 1px solid #dddddd;">
                    <div class="form-group">
                        <label for="email">信箱</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">密碼</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="repassword">再次輸入密碼</label>
                        <input type="password" class="form-control" id="repassword" name="repassword">
                    </div>

                    <div class="form-group">
                        <label for="name">姓名</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                </div>

            <div class="col-md-6" style="border-bottom: 1px solid #dddddd;">

                    <div class="form-group">
                        <label for="sex">性別</label>
                        {!! Form::select('sex', [0 => '女性', 1 => '男性'], 0, ['class'=> 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="birth">生日</label>
                        <input type="text" class="form-control" id="birth" name="birth">
                    </div>

                    <div class="form-group">
                        <label for="phone">電話</label>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0px;">
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-block btn-primary">索取驗證碼</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sms">簡訊驗證</label>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0px;">
                                <input type="text" class="form-control" id="sms" name="sms">
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-block btn-primary">驗證</button>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-md-12" style="text-align: right;margin-top: 20px;">
                <a href="{{ url('/') }}" style="width: 20%" class="btn btn-warning">取消</a>
                <button style="width: 20%" class="btn btn-primary">送出</button>
            </div>

            {!! Form::close() !!}
        </div>

    </div>

@endsection

@section('scripts')

@endsection

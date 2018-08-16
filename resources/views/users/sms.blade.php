@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-手機設定</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 5%;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">手機設定</h4>
            </div>
        </div>

        <div class="col-md-4 col-md-offset-4" style="margin-bottom: 20px;">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="phone">電話</label>
                    <div class="row">
                        <div class="col-md-7" style="padding-right: 0px;">
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col-md-5">
                            <button class="btn btn-block btn-primary">索取驗證碼</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="sms">簡訊驗證</label>
                    <div class="row">
                        <div class="col-md-7" style="padding-right: 0px;">
                            <input type="text" class="form-control" id="sms" name="sms">
                        </div>
                        <div class="col-md-5">
                            <button class="btn btn-block btn-primary">驗證</button>
                        </div>
                    </div>
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

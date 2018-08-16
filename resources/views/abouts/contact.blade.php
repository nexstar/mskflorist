@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-聯絡我們</title>
@endsection

@section('contents')

    <form name="formMain" method="post" action="Contact.php">
        <div class="container after_nav" style="margin-bottom: 35px;">
            <div style="text-align: center;margin-top: 20px;">
                <p style="color: #006737;font-size: 3rem;">聯絡我們</p>
            </div>
            <p>** 所有欄位皆為必填 **</p>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-4">
                    <label>姓名: </label>
                    <input type="text" name="formName" class="form-control" id="usr">
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-4">
                    <label>信箱:</label>
                    <input type="text" name="formEmail" class="form-control" id="usr">
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-4">
                    <label>聯絡電話:</label>
                    <input type="text" name="formPhone" class="form-control" id="usr">
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-4">
                    <label>主旨:</label>
                    <input type="text" name="formSubject" class="form-control" id="usr">
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-9">
                    <label>你的意見:</label>
                    <textarea name="formContent" class="form-control" rows="10" id="comment"></textarea>
                    <div style="float: right;">
                        <a href="#" class="btn" style="color: white;background-color: #006737;border-radius: 0;margin-top: 10px;" onclick="formSubmit();">送出&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('scripts')

@endsection

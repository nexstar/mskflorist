@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-結帳</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 5%;">

        <div class="row" style="padding: 0 15px 0 15px;">
            <h3 class="p_title" style="text-align: center;font-size: 4rem;">結帳</h3>
            <div style="height: 20px;"></div>
            <div class="col-md-6 col-md-offset-3">
                <img src="http://placehold.it/1170x613" style="width: 100%;">
            </div>
        </div>

        <div class="row" style="margin-bottom: 5%;padding: 0 15px 0 15px;">
            <h3 class="p_title" style="text-align: center;">Thank you! 感謝你的訂購！</h3>
            <p style="text-align: center;">
                <br/> 若你訂購商品為多肉植栽組，且需要代客送花服務，你可選擇「專車配送」。
                <br/>
                <br/> 請填寫禮品寄送資訊的三碼郵遞區號，網站會自動辨認你是否在免運費的服務範圍喔。
                <br/>
                <br/> （植栽組不適用於郵局寄送，因會有翻覆的可能性，專車配送會完整地送達這份花禮）。
            </p>
        </div>

        {{--發票寄送資訊--}}
        <div class="well">
            <div class="row">
                <h3 style="margin-left: 15px;">發票寄送資訊</h3>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>姓氏:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>名字:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>聯絡電話:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>統一編號:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>郵遞區號 - 三碼:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>地址:</label>
                        <input type="text" class="form-control" placeholder="縣/市-區/鄉/鎮-路/街-號/樓">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>電子信箱:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        {{--禮品寄送資訊（自取、自用可取消勾選）--}}
        <div class="well">
            <div class="row">
                <h3 style="margin-left: 15px;">禮品寄送資訊（自取、自用可取消勾選）</h3>
                <div class="checkbox" style="margin-left: 15px;">
                    <label>
                        <input type="checkbox" value="" id="gift_check">
                        <span style="color: red;" id="gift_check_msg">(已取消)</span>
                    </label>
                </div>
            </div>
            <div id="gift_form" style="display: none;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>姓氏:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>名字:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>聯絡電話:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>郵遞區號（三碼）:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>地址:</label>
                            <input type="text" class="form-control" placeholder="縣/市-區/鄉/鎮-路/街-號/樓">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>希望送達日期(桃園以南地區，運送需 2-5 個工作天):</label>
                            <input type="text" class="form-control" id="datepicker">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>希望送達時間:</label>
                            <!-- <input type="text" class="form-control"> -->
                            <select class="form-control">
                                <option>11:00 - 18:00</option>
                                <option>11:00 - 12:00</option>
                                <option>14:00 - 18:00</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--禮品插牌服務--}}
        <div class="well">
            <div class="row">
                <h3 style="margin-left: 15px;">禮品插牌服務</h3>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>收禮人（單位）:</label>
                        <input type="text" class="form-control" placeholder="可留白">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>祝賀詞:</label>
                        <textarea class="form-control" rows="5" placeholder="ex:鴻圖大展、生日快肉！，可以加點表情符號，需要換行也可以在此書寫。"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>送禮人（單位）:</label>
                        <input type="text" class="form-control" placeholder="可留白">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>訂單備註:</label>
                        <textarea class="form-control" rows="5" placeholder="例如: 到店自取時間、祝賀插牌有特製需求，請在此輸入。"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="padding: 0 15px 0 15px;">
            <h3>您的訂單</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>商品</th>
                    <th>總計</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>棒球魂老爹 - 父親節禮物修改加購商品內容 × 1</td>
                    <td>NT$2,650</td>
                </tr>
                <tr>
                    <td>棒球魂老爹 - 父親節禮物修改加購商品內容 × 1</td>
                    <td>NT$2,650</td>
                </tr>
                <tr>
                    <td>小計</td>
                    <td>NT$5,300</td>
                </tr>
                <tr>
                    <td>運費</td>
                    <td><input name="formShippingCosts" value="0" /></td>
                </tr>
                <tr>
                    <td>紅利</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>運送方式</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optradio" checked>到店自取</label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optradio">全台專車 運費依配送地區自動調整（植栽組）: NT$550</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>總計</td>
                    <td>NT$5,380</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="row" style="padding: 0 15px 0 15px;">
            <h3>付款方式</h3>
            <div class="panel panel-default">
                <div class="panel-heading"><strong>綠界(免註冊)：線上刷卡 全程SSL加密，個資不外洩。</strong></div>
                <div class="panel-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一次付清
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 分期付款 (3 期)
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center;">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    <span style="color: red;">我已閱讀並接受 使用條款</span>
                </label>
            </div>
            <button type="button" class="btn btn-success">綠界免註冊線上刷卡</button>
        </div>

    </div>

@endsection

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#gift_check').click(function() {
                $("#gift_form").toggle(this.checked);
                if (this.checked) {
                    $("#gift_check_msg").text("(已選擇)");
                } else {
                    $("#gift_check_msg").text("(已取消)");
                }
            });

            $("#datepicker").datepicker();
        });
    </script>

@endsection

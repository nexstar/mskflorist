@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-商店</title>
@endsection

@section('contents')

    <div class="container after_nav">

        <div class="row">
            <div style="text-align: center;margin-bottom: 60px;">
                <h4 style="font-size: 3rem;color: #006737;">凱特夫人商店</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-xs-9">
                <div>
                    <select id="SelectType" class="form-control" style="float: right;width: 200px;">
                        <option value="normal" selected disabled>尚未選商品排序</option>
                        <option value="orderbytime">依上架時間</option>
                        <option value="highttolow">依價格排序:高至低</option>
                        <option value="lowtohight">依價格排序:低至高</option>
                        <option value="hotstatus">依熱銷度</option>
                    </select>
                    <div style="clear: both;"></div>
                </div>
                <div class="row" style="margin-top: 20px;">

                    @foreach($products as $productslist)
                        <div class="col-md-4 col-xs-4" style="margin-bottom:20px;">
                            <a href="{{ route('shops.subindex', ['id' => $productslist->_id, 'type' => 0]) }}">
                                <img src="{{ env('SERVER_IMAGE_PATH').'/images/product/'.$productslist->src }}"  style="width:100%;">
                                <p style="color: black;">
                                    @if(mb_strlen($productslist->title) < 30)
                                        {{ $productslist->title }}
                                    @else
                                        {{ mb_substr($productslist->title,0,30,"utf-8").'...' }}
                                    @endif
                                </p>
                                <p style="color: black;cursor: default;text-align: center;">NT${{ $productslist->money }}</p>
                            </a>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-3">
                @include("layouts.shoprighttoolbar",$subviewlefttool)
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $("#SelectType").change(function () {
            switch ($(this).val()) {
                case "normal":
                    document.location.href = "/shops?SType=normal";
                    break;
                case "orderbytime":
                    document.location.href = "/shops?SType=orderbytime";
                    break;
                case "highttolow":
                    document.location.href = "/shops/highttolow?SType=highttolow";
                    break;
                case "lowtohight":
                    document.location.href = "/shops/lowtohight?SType=lowtohight";
                    break;
                case "hotstatus":
                    document.location.href = "/shops/hotstatus?SType=hotstatus";
                    break;
            };
        });

        $('#SelectType').val("<?php echo (empty($_GET['SType']))=="normal"?"normal":$_GET['SType']; ?>");
    </script>

@endsection

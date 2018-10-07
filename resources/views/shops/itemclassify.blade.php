@extends('layouts.body')
@section('title')
    <title>凱特夫人.花.時尚-商店</title>
@endsection

@section('contents')

    <div class="container after_nav">

        <div class="row">
            <div style="text-align: center;margin-bottom: 60px;">
                <h4 style="font-size: 3rem;color: #006737;">{{ $itemclassify_name }}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-xs-9">

                <div class="row">

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

    </script>
@endsection

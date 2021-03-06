<img src="http://docker.bmskflorist:4848/images/delivery.jpg" width="100%" style="margin-bottom: 20px;">

<div class="col-md-12" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
    <h4 style="color: #006737;font-size: 2.4rem;">購物車</h4>
    <p>購物車內無任何商品</p>
</div>

{{--
    <div class="col-md-12" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
        <h4 style="color: #006737;font-size: 2.4rem;">最近看過的商品</h4>
        <p>無任何看過的商品</p>
    </div>
--}}

<h4 style="color: #006737;font-size: 2.4rem;">商品項目</h4>
<div class="col-md-12" id="shop_right_wrapper" style="padding-left: 0px;padding-right: 0px;margin-bottom: 20px;">
    <ul>
        @for($i=0;$i<count($subviewlefttool);$i++)
        <li style="background-color: #F2EEEB;">
            <a data-toggle="collapse" href="#shop_lis{{$i}}">
                <span style="float: left;">【{{ $subviewlefttool[$i]['pdbigitem'] }}】</span>
                <i class="fa fa-arrow-circle-right" aria-hidden="true" style="float: right;margin-top: 4px;"></i>
                <div style="clear: both;"></div>
            </a>
            <div id="shop_lis{{$i}}" class="collapse">
                <ul>
                    @for($j=0;$j<count($subviewlefttool[$i]['pdsmallitem']);$j++)
                    <li>
                        <a href="{{ route('shops.itemclassify',[$subviewlefttool[$i]['pdsmallitem'][$j]['id'],0]) }}">{{ $subviewlefttool[$i]['pdsmallitem'][$j]['name'] }}</a>
                    </li>
                    @endfor
                </ul>
            </div>
        </li>
        @endfor
    </ul>
</div>

<div style="margin-bottom: 20px;">
    <h4 style="color: #006737;font-size: 2.4rem;">來自朋友們的肯定</h4>
    <a href="{{ url('acknowledgement') }}">
        <img src="http://docker.bmskflorist:4848/images/friend/thankyou.jpg" width="100%">
    </a>
    <p class="text-justify">感謝許多的朋友對我們的鼓勵與支持,每一份完成的花禮,都是傳達一份『祝福與美好』的心意,也是因為有你,這份花禮才有了真實的生命,我們也是感受著這樣的心意,而不斷努力堅持下去的。</p>
</div>
<div style="margin-bottom: 20px;">
    <h4 style="color: #006737;font-size: 2.4rem;">凱特夫人購物 Q&A</h4>
    <a href="{{ url('termsconditions') }}">

        <img src="http://docker.bmskflorist:4848/images/qa.jpg" width="100%">
    </a>
    <p class="text-justify">您可以藉由常見問與答,協助您完成訂購,若有其他疑問需要我們熱情的客服協助,請點選網頁中的客服連結小圖喔。</p>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".collapse").on('show.bs.collapse', function() {
            $(this).parent().find("i").addClass("collapse_animation");
        });
        $(".collapse").on('hide.bs.collapse', function() {
            $(this).parent().find("i").removeClass("collapse_animation");
        });
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
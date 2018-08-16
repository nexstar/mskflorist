<div class="cfooter" style="background-color: #006737;padding-bottom: 20px;padding-top: 20px;">
    <div class="container">
        <div class="row" style="">
            <div class="col-md-12 col-xs-12" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <ul id="footer_url_list">
                            <li><a href="{{ route('articles') }}" style="color: white;">凱特文章</a></li>
                            <li><a href="{{ url('shops') }}" style="color: white;">網路花店</a></li>
                            <li><a href="{{ url('termsconditions') }}" style="color: white;">購物須知</a></li>
                            <li><a href="{{ route('news') }}" style="text-decoration: none; color: white;">媒體報導</a></li>
                            <li><a href="{{ url('acknowledgement') }}" style="text-decoration: none; color: white;">來自朋友們的肯定</a></li>
                            <li><a href="{{ route('abouts.contact') }}" style="text-decoration: none; color: white;">聯絡我們</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div style="margin-top: 12px; text-align: right;">
                            <div class="contact_list">
                                <i style="cursor: pointer;" class="fab fa-facebook-square" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <p style="color: white;">© Copyrights 2018 凱特夫人.花.時尚. All rights reserved.</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.fa-facebook-square').on('click',function () {
        window.open("https://www.facebook.com/mk.flowershop/");
    })
</script>

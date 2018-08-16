<nav id="myNavbar">
    <div class="icon_row">
        <a href="{{ url('/') }}">
            <span class="nav_icon_left glyphicon glyphicon-list"></span>
        </a>
        <a id="cnav_icon_right">
            <span class="nav_icon_right glyphicon glyphicon-list"></span>
        </a>
    </div>
    <ul id="nav_ul">
        <li class="center_icon"><a href="{{ url('/') }}">首頁</a></li>
        <li><a href="{{ url('/articles') }}">文章</a></li>
        <li><a href="{{ url('/lessons') }}">課程</a></li>
        <li id="shop_nav_link">
            <a href="{{ url('/shops') }}">商店&nbsp;<span class="glyphicon glyphicon-chevron-down"></span>
                <ul id="shop_nav_list">
                    <li><a href="{{ url('/shops') }}">商店</a></li>
                    <li><a href="{{ url('/shops/cart') }}">購物車</a></li>
                    <li><a href="{{ url('/shops/buy') }}">結帳</a></li>
                </ul>
            </a>
        </li>
        <li class="mb_shop_list"><a href="{{ url('/shops') }}">商店</a></li>
        <li class="mb_shop_list"><a href="{{ url('/shops/cart') }}">購物車</a></li>
        <li class="mb_shop_list"><a href="{{ url('/shops/buy') }}">結帳</a></li>
        <li><a href="{{ url('abouts') }}">關於凱特</a></li>
        <li><a href="{{ url('location') }}">凱特在哪裡</a></li>
        <li>
            <a style="cursor: pointer;" data-toggle="modal" data-target="#login-modal-sm">登入/會員專區</a>
        </li>
    </ul>
</nav>

<div class="modal fade" id="login-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center;">
                <h4 class="modal-title">登入</h4>
            </div>
            <div class="modal-body">
                {!! Form::open( ['method' => 'GET', 'action' => 'UsersController@index', 'files' => true] ) !!}
                <div class="input-group" style="margin-bottom: 20px;">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-envelope"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="信箱" value="{!! old('','123') !!}" />
                </div>

                <div class="input-group" style="margin-bottom: 20px;">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input  type="password" class="form-control" placeholder="密碼" />
                </div>

                <div class="col-md-12" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                    <a href="{{ url('forgetpwd') }}" style="text-decoration: none;text-align: left;">忘記密碼</a>
                    <a href="{{ url('users/create') }}" style="text-decoration: none;float: right;">註冊</a>
                    <div style="clear: both;"></div>
                </div>

                <div style="text-align: center;">
                    <button style="width: 49%;" type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button style="width: 49%;" type="submit" class="btn btn-primary">登入</button>
                </div>
                {!! Form::close() !!}

            </div>
            <div class="modal-footer">
                <a href="{{ url('/users/fb_login') }}#" style="font-size: 15px;" type="button" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook-square"></i> 臉書登入
                </a>
            </div>
        </div>
    </div>
</div>

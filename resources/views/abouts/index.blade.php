@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-關於</title>
@endsection

@section('contents')

    <div class="container after_nav" style="margin-bottom: 20px;">

        <div class="row" style="margin-bottom: 20px;">
            <div style="text-align: center;">
                <h4 style="font-size: 3rem;color: #006737;">關於凱特夫人.花.時尚</h4>
            </div>
        </div>

        <div class="row" style="margin-bottom: 20px;">
            <img src="{{ env('SERVER_IMAGE_PATH').'/images/about1.jpg' }}" style="width: 100%;">
            <div style="text-align: center;">
                <h3 class="p_title">MRS.KATE Flower 的緣起</h3>
                <span style="font-size: 20px;">
                從小到大男孩子個性的我，<br /><br />
                一直到出社會工作從來沒想過自己會成為一名花藝設計師，<br /><br />
                成立花禮會場設計公司，<br /><br />
                最近甚至遠赴德國考全球花藝檢定認證，<br /><br />
                這樣的人生，我 從沒想過。<br /><br />
                記得是98年 <br /><br />
                那年是我人生最低潮的時刻，<br /><br />
                除了永遠忙不完的工作外，我最摯愛的父親離開了我們，<br /><br />
                因為沒有體會無常，<br /><br />
                所以未及時好好的說再見，<br /><br />
                心中非常的想念，悲痛不捨的心，無片刻的平靜。<br />
            </span>
            </div>
        </div>
        <div class="row" style="margin-bottom: 20px;">
            <img src="{{ env('SERVER_IMAGE_PATH').'/images/about2.jpg' }}" style="width: 100%;">
            <div style="text-align: center;">
                <h3 class="p_title">關於 MRS.KATE Flower</h3>
                <span style="font-size: 20px;">
                此時我與花相遇了～不可思議的力量撫慰了一顆想念父親的心，<br /><br />
                我在花卉中看到生命，<br /><br />
                看到絢爛，看到祝福，<br /><br />
                看到寧靜，看到思念，<br /><br />
                看到所有想對父親說的感謝與感情～<br /><br />
                自此我的父親帶著我走向一條我從未規劃的旅程，<br /><br />
                將花的生命力與溫暖以感謝的心分享給我的朋友並希望所有的人能因花得到平靜與喜悅。<br /><br />
                </span>
            </div>
        </div>
        <div class="row" style="margin-bottom: 20px;">
            <img src="{{ env('SERVER_IMAGE_PATH').'/images/about3.jpg' }}" style="width: 100%;">
            <div style="text-align: center;">
                <h3 class="p_title">成立 MRS.KATE Flower</h3>
                <span style="font-size: 20px;">
                MRS.KATE Flower 成立以來秉持對人的熱情與花藝創作的極致，<br /><br />
                建立了一個以人為主的花藝創作風格，<br /><br />
                傾聽您的需求，訂做您的祝福，<br /><br />
                每一次的作品，都代表一份真摯的情感，一份感動，一份溫暖。<br /><br />
                </span>
            </div>
        </div>
        <div class="row" style="margin-bottom: 20px;">
            <img src="{{ env('SERVER_IMAGE_PATH').'/images/about4.jpg' }}" style="width: 100%;">
            <div style="text-align: center;">
                <h3 class="p_title">情感與祝福</h3>
                <span style="font-size: 20px;">
                    所以 MRS.KATE Flower 沒辦法將自己定位為一個花的量販店，<br /><br />
                    所以一開始就將【作品設計】定位在感動與溫暖人的心為發想，<br /><br />
                    希望藉由豐富色彩與花形設計，<br /><br />
                    讓訂購者與收禮者都能感受到花卉所帶來撫慰人心與歡愉，<br /><br />
                    傳達關心與祝福。<br /><br />
                    在花材的選擇上不僅求豐富多變更要搭配上您的需求與收禮者的喜好，<br /><br />
                    就是希望讓收禮者感受到送禮者的用心與情感，<br /><br />
                    雖然因為這樣的一個用心，<br /><br />
                    增加了我們的成本與採購的不便，<br /><br />
                    但我們仍然【堅持】是因為我們知道您的【情感與祝福】是無法被量販的，<br /><br />
                    並期待讓對方知道的，<br /><br />
                    雖然 MRS.KATE Flower 不是最大的花卉量販通路，<br /><br />
                    但絕對是最誠懇熱情的花禮設計公司喔！
                </span>
            </div>

        </div>

        <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-6" style="text-align: center;margin-top: 5%;font-size: 15px;">
                <p>聯絡電話：02-7730-9968</p>
                <p>傳真電話：02-2395-5335#008888</p>
                <p>聯絡地址：10491 台北市中山區林森北路487號212室</p>
                <p>聯絡信箱：mk@flowerdiy.url.tw</p>
                <p>Skype網路電話：mrs.kate99</p>
            </div>
            <div class="col-md-6">
                <div id="map" style="width: 100%;height: 200px;"></div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <script>
        var head = document.getElementsByTagName('head')[0];
        var insertBefore = head.insertBefore;
        head.insertBefore = function(newElement, referenceElement) {
            insertBefore.call(head, newElement, referenceElement);
        };
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 25.0613862, lng: 121.5258318 },
                zoom: 19
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq6ndAq0NvAMz4yKsw_eFmLJax6uQhpzc&callback=initMap" async defer></script>
    <style type="text/css">
        body {
            font-family: 'Roboto', 'Noto Sans TC', Microsoft JhengHei, Helvetica, Arial, sans-serif !important;
        }
    </style>
@endsection

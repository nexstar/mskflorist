@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-課程</title>
@endsection

@section('contents')

    <div class="container after_nav">
        <div class="col-md-12" style="margin-bottom: 20px;">

            <div class="row">
                <div style="text-align: center;margin-bottom: 40px;">
                    <h4 style="font-size: 3rem;color: #006737;">課程標題</h4>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1">

                <img src="http://placehold.it/1170x613" style="margin-bottom: 5px;" width="100%" />

                <div class="row" style="padding: 2.5% 10% 2% 10%;">

                    <div class="col-md-12 col-xs-12 " style="margin: 20px 0px;border-left: 6px solid green;background-color: lightgrey;font-size: 15px;padding: 15px;">
                        <p>開課時間 | 08/05 (日) 08/17 (五) 08/18 (六)</p>
                    </div>

                    {{--課程介紹--}}
                        <p style="font-size: 25px;margin-bottom: 20px;">課程介紹</p>
                        @for($i=0;$i<2;$i++)
                        <div class="col-md-12 col-xs-12" style="margin-bottom: 5%;">
                            <h4 class="text-justify">營建署的「貸款負擔率」是以「中位數住宅總價貸款每月攤還額」換算「家戶月可支配所得中位數」，若低於30％，表示「可合理負擔」、30％至40％之間代表「負擔能力略低」；40％至50％之間代表「負擔能力偏低」；若超過50％表示「負擔能力過低」，等於是每月被房貸追著跑。 根據2018年第2季全台「貸款負擔率」數據，全台貸款負擔率為37.25%，較上季些微減少0.33個百分點，房價負擔能力維持於略低等級；而全台「房價所得比」則為9.08倍，較上季些微減少0.08倍。 第2季台北市貸款負擔率為61.54％，新北市貸款負擔率為52.3％，雙雙較上季增加。而雙北市目前貸款負擔率普遍屬於「負擔能力過低」，換句話說，北市一般房貸族每月所得有6成拿來繳房貸，新北購屋者則有5成多所得拿來繳貸款。</h4>
                            <img src="http://placehold.it/1170x613" style="width: 100%;">
                        </div>
                        @endfor

                    {{--學習重點--}}
                        <p style="font-size: 25px;margin-bottom: 20px;">學習重點</p>
                        @for($i=0;$i<2;$i++)
                            <div class="col-md-12 col-xs-12" style="margin-bottom: 5%;">
                                <h4 class="text-justify">營建署的「貸款負擔率」是以「中位數住宅總價貸款每月攤還額」換算「家戶月可支配所得中位數」，若低於30％，表示「可合理負擔」、30％至40％之間代表「負擔能力略低」；40％至50％之間代表「負擔能力偏低」；若超過50％表示「負擔能力過低」，等於是每月被房貸追著跑。 根據2018年第2季全台「貸款負擔率」數據，全台貸款負擔率為37.25%，較上季些微減少0.33個百分點，房價負擔能力維持於略低等級；而全台「房價所得比」則為9.08倍，較上季些微減少0.08倍。 第2季台北市貸款負擔率為61.54％，新北市貸款負擔率為52.3％，雙雙較上季增加。而雙北市目前貸款負擔率普遍屬於「負擔能力過低」，換句話說，北市一般房貸族每月所得有6成拿來繳房貸，新北購屋者則有5成多所得拿來繳貸款。</h4>
                                <img src="http://placehold.it/1170x613" style="width: 100%;">
                            </div>
                        @endfor

                    {{--課程梯次與費用--}}
                        <p style="font-size: 25px;margin-bottom: 20px;">課程梯次與費用</p>
                        <div class="col-md-12 col-xs-12" style="margin-bottom: 5%;">
                            <div style="margin: 20px 0px;border-left: 6px solid green;background-color: lightgrey;font-size: 15px;padding: 15px;">
                                <p>第 X 梯次</p><br>
                                <p>2018/08/17 (五) 下午 14:00-17:00</p><br>
                                <p>2018/08/17 (五) 下午 14:00-17:00</p>
                                <br>
                                <br>
                                <p>第 X 梯次</p><br>
                                <p>2018/08/17 (五) 下午 14:00-17:00</p><br>
                                <p>2018/08/17 (五) 下午 14:00-17:00</p>
                                <br>
                                <br>
                                <p>第 X 梯次</p><br>
                                <p>2018/08/17 (五) 下午 14:00-17:00</p><br>
                                <p>2018/08/17 (五) 下午 14:00-17:00</p>
                                <br>
                                <br>
                            </div>
                        </div>

                    {{--注意事項--}}
                        <p style="font-size: 25px;margin-bottom: 20px;">注意事項</p>
                        <div class="col-md-12 col-xs-12" style="margin-bottom: 5%;font-size: 18px;">
                            <ol>
                                <li>開課日前 4-14 天，如果需要取消或更改梯次，需酌收手續費(課程費用的 50% )。</li>
                                <li>開課日前 1-3 天，不予退費及更改梯次，如無法參加課程，請將名額轉讓給其他人參加。</li>
                                <li>如課程招生未滿或因天災等不可抗力因素，有肉將於 2 天前主動聯繫協助更改梯次或全額退費。</li>
                                <li>若需課程包班服務，請洽 LINE ID : @succuland。</li>
                                <li>請學員提前 10 分鐘到達，讓課程可以準時開始，若遲到超過 30 分鐘則無法參與課程，視同取消。</li>
                                <li>學員只需帶著愉快的心情來上課，所有材料工具都會幫你準備好。</li>
                                <li>每梯次限定 10 人上課，小班教學，歡迎一同包班同樂！</li>
                            </ol>
                        </div>

                    {{--購物車--}}
                        <div class="col-md-12 col-xs-12" style="text-align: center;">
                            <a href="{{ route('shops.sub', ['id' => 1, 'type' => 1]) }}">
                                <img style="width: 25%;" src="http://placehold.it/1170x613">
                            </a>
                        </div>

                </div>

            </div>

        </div>
    </div>

@endsection

@section('scripts')

@endsection


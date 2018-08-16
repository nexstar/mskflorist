@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-文章</title>
@endsection

@section('contents')

    <div class="container after_nav">

        <div class="row">
            <div style="text-align: center;margin-bottom: 40px;">
                <p style="font-size: 20px;color: #006737;">文章標題</p>
            </div>
        </div>

        <div class="row" style="margin-bottom: 20px;">

            <div class="col-md-8 col-md-offset-2">

                <div class="col-md-12">
                    <img src="http://placehold.it/1170x613" style="width: 100%;"/>
                    <p class="text-justify" style="font-size: 15px;padding: 15px 15px 15px 0px;">營建署的「貸款負擔率」是以「中位數住宅總價貸款每月攤還額」換算「家戶月可支配所得中位數」，若低於30％，表示「可合理負擔」、30％至40％之間代表「負擔能力略低」；40％至50％之間代表「負擔能力偏低」；若超過50％表示「負擔能力過低」，等於是每月被房貸追著跑。 根據2018年第2季全台「貸款負擔率」數據，全台貸款負擔率為37.25%，較上季些微減少0.33個百分點，房價負擔能力維持於略低等級；而全台「房價所得比」則為9.08倍，較上季些微減少0.08倍。 第2季台北市貸款負擔率為61.54％，新北市貸款負擔率為52.3％，雙雙較上季增加。而雙北市目前貸款負擔率普遍屬於「負擔能力過低」，換句話說，北市一般房貸族每月所得有6成拿來繳房貸，新北購屋者則有5成多所得拿來繳貸款。</p>
                </div>

                @for($i=0;$i<3;$i++)
                    <div class="col-md-12">
                        <div class="form-group">
                            <div style="margin-bottom: 20px;border-left: 6px solid #5cb85c;background-color: #dddddd;">
                                <p style="margin-left: 10px;font-size: 15px;padding: 10px;color: #888888;">小標題</p>
                            </div>
                            <img src="http://placehold.it/1170x613" style="width:100%;">
                            <p style="font-size: 15px;padding: 15px 15px 15px 0px;">第2季台北市貸款負擔率為61.54％，新北市貸款負擔率為52.3％，雙雙較上季增加。而雙北市目前貸款負擔率普遍屬於「負擔能力過低」，換句話說，北市一般房貸族每月所得有6成拿來繳房貸，新北購屋者則有5成多所得拿來繳貸款。</p>
                        </div>
                    </div>
                @endfor

                <div class="col-md-12" style="text-align: right;">
                    <a href="#" style="font-size: 25px;text-decoration: none;">
                        <i class="fab fa-facebook-square" aria-hidden="true"></i>
                        <span>分享</span>
                    </a>
                </div>

            </div>

        </div>
    </div>

@endsection

@section('scripts')

@endsection

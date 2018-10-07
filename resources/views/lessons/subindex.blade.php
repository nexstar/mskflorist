@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-課程</title>
@endsection

@section('contents')

    <div class="container after_nav">
        <div class="col-xs-12" style="margin-bottom: 20px;">

            <div class="row">
                <div style="text-align: center;margin-bottom: 20px;margin-top: 20px;">
                    <h4 style="font-size: 3rem;color: #006737;">課程標題</h4>
                </div>
            </div>

            <div class="col-xs-10 col-xs-offset-1">

                <img src="{{ env('SERVER_IMAGE_PATH').'/images/course/'.$course->imgjson['img'] }}" style="margin-bottom: 5px;" width="100%" />
                <p class="text-justify" style="font-size: 15px;padding: 15px 15px 15px 0px;">{{ $course->contents }}</p>

                <div class="row" style="padding: 2.5% 10% 2% 10%;">

                    <div class="col-xs-12 " style="margin: 20px 0px;border-left: 6px solid green;background-color: lightgrey;font-size: 15px;padding: 15px;">
                        <p>開課時間&nbsp;|&nbsp;
                            @for($i=0;$i<count($course->Timeslot);$i++)
                                {{ $course->Timeslot[$i]['month'].'/'.$course->Timeslot[$i]['day'] }}
                                @if($i+1 != count($course->Timeslot)) , @endif
                            @endfor
                        </p>
                    </div>

                    {{--課程介紹--}}
                        <p style="font-size: 25px;margin-bottom: 20px;">課程介紹</p>
                        @for($i=0;$i<count($course->modelarray);$i++)
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <div style="margin-bottom: 20px;border-left: 6px solid #5cb85c;background-color: #dddddd;">
                                        <p style="margin-left: 10px;font-size: 15px;padding: 10px;color: #888888;">{{ $course->modelarray[$i]['title'] }}</p>
                                    </div>
                                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/course/'.$course->modelarray[$i]['src'] }}" style="width:100%;">
                                    <p style="font-size: 15px;padding: 15px 15px 15px 0px;">{{ $course->modelarray[$i]['contents'] }}</p>
                                </div>
                            </div>
                        @endfor

                    {{--購物車--}}
                        <div class="col-xs-12" style="text-align: center;">
                            <a href="{{ route('shops.subindex', ['id' => $course->_id, 'type' => 1]) }}">
                                <img style="width: 50%;" src="{{ env('SERVER_IMAGE_PATH').'/images/clickmetoshop.png' }}">
                            </a>
                        </div>

                </div>

            </div>

        </div>
    </div>

@endsection

@section('scripts')

@endsection


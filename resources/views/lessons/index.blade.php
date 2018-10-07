@extends('layouts.body')

@section('title')
    <title>凱特夫人.花.時尚-課程</title>
@endsection

@section('contents')

    <div class="container after_nav">
        <div style="text-align: center;margin-bottom: 40px;">
            <h4 style="font-size: 3rem;color: #006737;">凱特夫人課程</h4>
        </div>
        <div class="container-fluid" style="padding-bottom: 5px;">
            <div style="border-top: 1px solid #e7e7e7;border-bottom: 1px solid #e7e7e7;" id="wrapper">
                <ul>
                    <li><a href="{{ route('lessons_course.index') }}">全部課程</a></li>
                    <li><a href="{{ route('lessons_course.period', 1) }}">當月課程</a></li>
                    <li><a href="{{ route('lessons_course.history', 2) }}">歷史課程</a></li>
                </ul>
            </div>
        </div>
        @foreach($course as $courselist)
            <?php

                $_y = (int) date('Y');
                $_m = (int) date('n');
                $_j = (int) date('j');

                $last = $courselist->Timeslot;
                $lastcount = count($courselist->Timeslot) - 1;

                $last_y = (int) $last[$lastcount]['year'];
                $last_m = (int) $last[$lastcount]['month'];
                $last_j = (int) $last[$lastcount]['day'];
            ?>

            @if( empty($type) )
                @if( ($last_y <= $_y) )
                    @if( ($last_m <= $_m) )
                        @if( !($last_j < $_j) )
                            <div class="col-md-6" style="margin-bottom: 20px;margin-top:20px;">
                                    <a href="{{ route('lessons_course.subindex', $courselist->_id) }}" style="text-decoration: none;">
                                        <img src="{{ env('SERVER_IMAGE_PATH').'/images/course/'.$courselist->imgjson['img'] }}" width="100%" style="margin-bottom: 10px;">
                                        <p data-toggle="tooltip" data-placement="bottom" title="課程敘述" style="color: #006737;font-size: 2rem;">
                                            @if(mb_strlen($courselist->title) < 30)
                                                {{ $courselist->title }}
                                            @else
                                                {{ mb_substr($courselist->title,0,30,"utf-8").'...' }}
                                            @endif
                                        </p>
                                    </a>
                                    <hr style="margin-top: 0px;margin-bottom: 0px;">
                                    <p style="color: #999999;white-space: nowrap;text-overflow: ellipsis;">開課時間:&nbsp;
                                        @for($i=0;$i<count($courselist->Timeslot);$i++)
                                            @if( ($courselist->Timeslot[$i]['year'] >= ((int) date('Y')) ) )
                                                {{-- 月份 > --}}
                                                @if( ($courselist->Timeslot[$i]['month'] > ((int) date('n')) ) )
                                                    {{ $courselist->Timeslot[$i]['year'].'年'.$courselist->Timeslot[$i]['month'].'月'.$courselist->Timeslot[$i]['day'].'號' }}
                                                @endif

                                                {{-- 月份 == --}}
                                                @if( ($courselist->Timeslot[$i]['month'] == ((int) date('n')) ) )
                                                    {{-- 日期 >= --}}
                                                    @if( ($courselist->Timeslot[$i]['day'] >= ((int) date('j')) ) )
                                                        {{ $courselist->Timeslot[$i]['year'].'年'.$courselist->Timeslot[$i]['month'].'月'.$courselist->Timeslot[$i]['day'].'號' }}
                                                    @endif
                                                @endif
                                            @endif
                                            @if($i+1 != count($courselist->Timeslot)) | @endif
                                        @endfor
                                    </p>
                            </div>
                        @endif
                    @else
                        <div class="col-md-6" style="margin-bottom: 20px;margin-top:20px;">
                                <a href="{{ route('lessons_course.subindex', $courselist->_id) }}" style="text-decoration: none;">
                                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/course/'.$courselist->imgjson['img'] }}" width="100%" style="margin-bottom: 10px;">
                                    <p data-toggle="tooltip" data-placement="bottom" title="課程敘述" style="color: #006737;font-size: 2rem;">
                                        @if(mb_strlen($courselist->title) < 30)
                                            {{ $courselist->title }}
                                        @else
                                            {{ mb_substr($courselist->title,0,30,"utf-8").'...' }}
                                        @endif
                                    </p>
                                </a>
                                <hr style="margin-top: 0px;margin-bottom: 0px;">
                                <p style="color: #999999;white-space: nowrap;text-overflow: ellipsis;">開課時間:&nbsp;
                                    @for($i=0;$i<count($courselist->Timeslot);$i++)
                                        @if( ($courselist->Timeslot[$i]['year'] >= ((int) date('Y')) ) )
                                            {{-- 月份 > --}}
                                            @if( ($courselist->Timeslot[$i]['month'] > ((int) date('n')) ) )
                                                {{ $courselist->Timeslot[$i]['year'].'年'.$courselist->Timeslot[$i]['month'].'月'.$courselist->Timeslot[$i]['day'].'號' }}
                                            @endif

                                            {{-- 月份 == --}}
                                            @if( ($courselist->Timeslot[$i]['month'] == ((int) date('n')) ) )
                                                {{-- 日期 >= --}}
                                                @if( ($courselist->Timeslot[$i]['day'] >= ((int) date('j')) ) )
                                                    {{ $courselist->Timeslot[$i]['year'].'年'.$courselist->Timeslot[$i]['month'].'月'.$courselist->Timeslot[$i]['day'].'號' }}
                                                @endif
                                            @endif
                                        @endif
                                        @if($i+1 != count($courselist->Timeslot)) | @endif
                                    @endfor
                                </p>
                            </div>
                    @endif
                @else
                    <div class="col-md-6" style="margin-bottom: 20px;margin-top:20px;">
                        <a href="{{ route('lessons_course.subindex', $courselist->_id) }}" style="text-decoration: none;">
                            <img src="{{ env('SERVER_IMAGE_PATH').'/images/course/'.$courselist->imgjson['img'] }}" width="100%" style="margin-bottom: 10px;">
                            <p data-toggle="tooltip" data-placement="bottom" title="課程敘述" style="color: #006737;font-size: 2rem;">
                                @if(mb_strlen($courselist->title) < 30)
                                    {{ $courselist->title }}
                                @else
                                    {{ mb_substr($courselist->title,0,30,"utf-8").'...' }}
                                @endif
                            </p>
                        </a>
                        <hr style="margin-top: 0px;margin-bottom: 0px;">
                        <p style="color: #999999;white-space: nowrap;text-overflow: ellipsis;">開課時間:&nbsp;
                            @for($i=0;$i<count($courselist->Timeslot);$i++)
                                @if( ($courselist->Timeslot[$i]['year'] >= ((int) date('Y')) ) )
                                    {{-- 月份 > --}}
                                    @if( ($courselist->Timeslot[$i]['month'] > ((int) date('n')) ) )
                                        {{ $courselist->Timeslot[$i]['year'].'年'.$courselist->Timeslot[$i]['month'].'月'.$courselist->Timeslot[$i]['day'].'號' }}
                                    @endif

                                    {{-- 月份 == --}}
                                    @if( ($courselist->Timeslot[$i]['month'] == ((int) date('n')) ) )
                                        {{-- 日期 >= --}}
                                        @if( ($courselist->Timeslot[$i]['day'] >= ((int) date('j')) ) )
                                            {{ $courselist->Timeslot[$i]['year'].'年'.$courselist->Timeslot[$i]['month'].'月'.$courselist->Timeslot[$i]['day'].'號' }}
                                        @endif
                                    @endif
                                @endif
                                @if($i+1 != count($courselist->Timeslot)) | @endif
                            @endfor
                        </p>
                    </div>
                @endif
            @elseif( $type == 1 )
                <div class="col-md-6" style="margin-bottom: 20px;margin-top:20px;">
                        <a href="{{ route('lessons_course.subindex', $courselist->_id) }}" style="text-decoration: none;">
                            <img src="{{ env('SERVER_IMAGE_PATH').'/images/course/'.$courselist->imgjson['img'] }}" width="100%" style="margin-bottom: 10px;">
                            <p data-toggle="tooltip" data-placement="bottom" title="課程敘述" style="color: #006737;font-size: 2rem;">
                                @if(mb_strlen($courselist->title) < 30)
                                    {{ $courselist->title }}
                                @else
                                    {{ mb_substr($courselist->title,0,30,"utf-8").'...' }}
                                @endif
                            </p>
                        </a>
                        <hr style="margin-top: 0px;margin-bottom: 0px;">
                        <p style="color: #999999;white-space: nowrap;text-overflow: ellipsis;">開課時間:&nbsp;
                            @for($i=0;$i<count($courselist->Timeslot);$i++)
                                @if( ($courselist->Timeslot[$i]['year'] >= ((int) date('Y')) ) )
                                    {{-- 月份 > --}}
                                    @if( ($courselist->Timeslot[$i]['month'] > ((int) date('n')) ) )
                                        {{ $courselist->Timeslot[$i]['year'].'年'.$courselist->Timeslot[$i]['month'].'月'.$courselist->Timeslot[$i]['day'].'號' }}
                                    @endif

                                    {{-- 月份 == --}}
                                    @if( ($courselist->Timeslot[$i]['month'] == ((int) date('n')) ) )
                                        {{-- 日期 >= --}}
                                        @if( ($courselist->Timeslot[$i]['day'] >= ((int) date('j')) ) )
                                            {{ $courselist->Timeslot[$i]['year'].'年'.$courselist->Timeslot[$i]['month'].'月'.$courselist->Timeslot[$i]['day'].'號' }}
                                        @endif
                                    @endif
                                @endif
                                @if($i+1 != count($courselist->Timeslot)) | @endif
                            @endfor
                        </p>
                    </div>
            @elseif( $type == 2 )
                <div class="col-md-6" style="margin-bottom: 20px;margin-top:20px;">
                    <img src="{{ env('SERVER_IMAGE_PATH').'/images/course/'.$courselist->imgjson['img'] }}" width="100%">
                    <h4 style="text-align: center;">課程預約結束</h4>
                </div>
            @endif

        @endforeach
    </div>

@endsection

@section('scripts')

@endsection


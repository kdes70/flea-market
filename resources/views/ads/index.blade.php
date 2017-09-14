@extends('layout')

@section('title', 'Index')

@section('content')

    <div class="row">
        <div class="container">
            @include('layouts.search')
        </div>
    </div>

    <div class="container">

        <div class="post_block">
            @if($ads)
                @foreach($ads as $ad)
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 post_wrapper">
                        <div class="post_card">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div>
                                        <div class="post_preview">
                                            <a class="img_wrapper"
                                               title="{{$ad->title}}"
                                               href=""
                                               style="background: url('http://via.placeholder.com/180x180') center center / cover; height: 214px;">
                                            </a>
                                        </div>
                                        <div class="post_title">
                                            <a href="">{{$ad->title}}</a>
                                        </div>
                                        <div class="post_price text-left text-success">{{$ad->price}} &#8381;</div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="glyphicon glyphicon-eye-open">56+7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                {{--// not post--}}
            @endif

            {{$ads->links()}}
        </div>




    </div>



@stop


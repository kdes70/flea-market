@extends('layout')

@section('title', 'Index')

@section('content')

    <div class="row">
        <div class="container">
            @include('layouts.search')
        </div>
    </div>

    <div class="container">


        @if($ads)
            @foreach($ads as $ad)
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 ads_wrapper">
                <div class="ads_card">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div>
                                <div class="ads_preview">
                                    <a href="">
                                        <img src="http://via.placeholder.com/180x180" alt="">
                                    </a>
                                </div>
                                <div class="title">
                                    <a href="">{{$ad->title}}</a>
                                </div>
                                <div class="price">{{$ad->price}} &#8381;</div>
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
        @endif

    </div>



@stop


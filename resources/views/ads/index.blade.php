@extends('layout')

@section('title', 'Index')

@section('content')

    <div class="row">
        <div class="container">
            @include('layouts.search')
        </div>
    </div>

    <div class="container">
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="ads_card">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <article>
                            <a href="">
                                <img src="http://via.placeholder.com/180x180" alt="">
                            </a>
                            <div class="title">
                                <a href="">Заголовок тут какой-то</a>
                            </div>
                            <div class="price">10000 р.</div>
                        </article>
                    </div>
                    <div class="panel-footer">
                        <span class="glyphicon glyphicon-eye-open">56+7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop


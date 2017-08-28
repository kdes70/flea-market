@extends('layout')

@section('title', 'Index')

@section('content')

    <div class="row">
        <div class="container">
            <header>
                <div class="col-md-8">
                    <div class="search-form">
                        <div class="form-group">
                            <div class="input-group">
                                <input id="search_field" type="text" class="form-control input-sm"
                                       placeholder="Поиск по 34014 объявлениям..." value="">
                                <span class="input-group-btn">
							    <button id="search_button" class="btn btn-md btn-primary"><span
                                            class="glyphicon glyphicon-search"></span></button>
						    </span>
                            </div>
                        </div>
                        <div class="filter-form">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label><input type="checkbox"> Remember parameters</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                </div>
            </header>


        </div>
    </div>

    <div class="container">
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="ads_card">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <article class="ads_content">
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


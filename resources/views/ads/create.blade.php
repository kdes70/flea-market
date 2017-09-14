@extends('layout')

@section('title', 'Add')

@section('content')

<div class="main container">
<h1 class="header">Добавления нового объявления</h1>
    {{--@include('partials.message')--}}
    {{--@include('partials.errors')--}}
    @include('ads._form')
</div>
@stop
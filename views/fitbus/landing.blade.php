{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
@extends('fitbus.app')

@section('content')
    @include('fitbus.screens.intro')
    @include('fitbus.screens.trainers')
    @include('fitbus.screens.steps')
    @include('fitbus.screens.location')
    @include('fitbus.screens.stream')

    {{--<a href="http://go2fit.pro" class="fitbus-btn">На сайт Go2Fit &nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>--}}
    {{--<a href="mailto:info@go2fit.pro" class="fitbus-btn fitbus-btn_spacing">E-mail &nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i></a>--}}

@endsection
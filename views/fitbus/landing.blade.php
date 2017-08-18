{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
@extends('fitbus.app')

@section('content')
    @include('fitbus.screens.intro')
    @include('fitbus.screens.trainers')
    @include('fitbus.screens.steps')
    @include('fitbus.screens.location')

    {{--<div class="fitbus-subtitle">Автобус, сжигающий калории</div>--}}

    {{--<div class="fitbus-text fitbus-text_bigger">Москва, 23—25 августа 2017</div>--}}
    {{--<div class="fitbus-text fitbus-text_dark">профессиональные тренеры, лица проекта GO2FIT и счастливая семейная пара проведут персональные тренировки для самых смелых и активных горожан.</div>--}}
    {{--<div class="fitbus-text">--}}
        {{--Всего три летних дня, 23, 24 и 25 августа автобус, сжигающий калории, проедет по центральным улицам города и совершит главный фит-стоп--}}
        {{--на ВДНХ, у Павильона № 75, на форуме «Москвичам – здоровый образ жизни»--}}
    {{--</div>--}}

    {{--<a href="http://go2fit.pro" class="fitbus-btn">онлайн трансляция &nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>--}}
    {{--<a href="http://go2fit.pro" class="fitbus-btn">На сайт Go2Fit &nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>--}}
    {{--<a href="mailto:info@go2fit.pro" class="fitbus-btn fitbus-btn_spacing">E-mail &nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i></a>--}}

@endsection
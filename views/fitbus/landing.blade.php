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
    @include('fitbus.screens.creators')
    @include('fitbus.inc.footer')
@endsection
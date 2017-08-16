{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
@extends('fitbus.app')

@section('content')
    <div class="fitbus-placeholder">
        <div class="fitbus-placeholder__header">
            @include('fitbus.blocks.social')
        </div>
        <div class="fitbus-placeholder__content">
            {{--<div>--}}
                @include('fitbus.blocks.go2fit-logo')
                <div class="fitbus-title">
                    Представляет <br> Уникальный проект
                </div>
            {{--</div>--}}
        </div>
    </div>
@endsection
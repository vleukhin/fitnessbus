{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="fitbus-screen-steps">
    <div class="fitbus-title fitbus-title_dark fitbus-title_uncap">Не пропусти свою тренировку в ЖИР0BUSЕ!</div>
    <div class="fitbus-screen-steps__steps">
        @include('fitbus.blocks.step', ['name' => 'suitup', 'title' => 'Надевай <br/>спортивную форму'])
        @include('fitbus.blocks.step', ['name' => 'vdnh', 'title' => 'Приезжай<br/> на ВДНХ'])
        @include('fitbus.blocks.step', ['name' => 'dumbbells', 'title' => 'пройди фитнес-марафон <br/>в ЖИР0BUSe'])
        @include('fitbus.blocks.step', ['name' => 'photo', 'title' => 'фотографируй и снимай <br/>видео'])
        @include('fitbus.blocks.step', ['name' => 'present', 'title' => 'получи <br/>свой подарок'])
    </div>
    <div class="fitbus-screen-steps__social">
        <div class="fitbus-text">
            И следи за нами в соцсетях
        </div>
        @include('fitbus.blocks.social', ['modifier' => 'red'])
    </div>
</div>
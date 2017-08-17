<?php

//require_once __DIR__ . '/../vendor/autoload.php';

if (!empty($_POST['email'])) {
    $file = __DIR__ . '/../storage/list.txt';
    if ($email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        @file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
    }
} else {
    ?>

    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ЖИР0BUS</title>
        <script src="/build/app.bundle.js"></script>
        <link rel="stylesheet" href="/build/app.bundle.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
    <div class="page">
        <div class="content">
            <div class="fitbus-placeholder">
                <div class="fitbus-placeholder__header">
                    <div class="fitnessbus-logo"></div>
                    <div class="fitbus-social">
                        <a href="https://www.facebook.com/GO2fitMoscow" target="_blank" class="fitbus-social__link">
                            <div class="fitbus-social__item">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </a>
                        <a href="https://vk.com/go_2fit" target="_blank" class="fitbus-social__link">
                            <div class="fitbus-social__item">
                                <i class="fa fa-vk"></i>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/go_2fit/" target="_blank" class="fitbus-social__link">
                            <div class="fitbus-social__item">
                                <i class="fa fa-instagram"></i>
                            </div>
                        </a>
                        <a href="https://www.youtube.com/channel/UCEIATbgl9Z4vQNXjme0sPYA" target="_blank" class="fitbus-social__link">
                            <div class="fitbus-social__item">
                                <i class="fa fa-youtube"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="fitbus-placeholder__content">
                    <a href="https://www.go2fit.pro" target="_blank">
                        <div class="go2fit-logo"></div>
                    </a>

                    <div class="fitbus-title">
                        Представляет <br> Уникальный проект
                    </div>
                    <div class="fitbus-contact">
                        <div class="fitbus-contact__info">
                            Хочешь быть в курсе новостей?
                        </div>
                        <div class="fitbus-contact__contact">
                            <input class="fitbus-contact__input" placeholder="E-mail">
                            <button class="fitbus-contact__button" onclick="sendEmail($('.fitbus-contact__input').val())">
                                <i class="fa fa-envelope"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
<? }
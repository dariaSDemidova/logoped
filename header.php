<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logoped</title>

    <?php
    wp_head();
    ?>
</head>

<body>
    <header id="header" class="header">
        <div class="header__bar bg-green">
            <div class="header__wrapper container">
                <a href="/" class="header__logo"><img src="./assets/logo/logo.svg" alt="Logo" /></a>
                <div class="header__icons">
                    <a href="https://wa.me/79111988524" target="_blank" rel="noopener noreferrer"><img
                            src="./assets/icons/whatsapp.svg" alt="WhatsApp" /></a>
                    <a href="mailto:mitornadya@yandex.ru" target="_blank" rel="noopener noreferrer"><img
                            src="./assets/icons/email.svg" alt="Email" /></a>
                    <a href="tel:+79111988524"><img src="./assets/icons/phone.svg"
                            alt="Позвонить по номеру +7 (911) 198-85-24" /></a>
                </div>
                <button class="header__burger" aria-label="Меню" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <nav class="header__nav">
            <ul class="header__nav-list text-black text-uppercase list-unstyled">
                <li class="nav-list__item"><a class="text-decoration-none" href="#about">Обо мне</a></li>
                <li class="nav-list__item"><a class="text-decoration-none" href="#services">Услуги и Прайс</a></li>
                <li class="nav-list__item"><a class="text-decoration-none" href="#reviews">Отзывы</a></li>
                <li class="nav-list__item"><a class="text-decoration-none" href="#game">Развивающая игра</a></li>
                <li class="nav-list__item"><a class="text-decoration-none" href="#contacts">Контакты</a></li>
            </ul>
        </nav>
    </header>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
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
                <a href="/" class="header__logo"><img src="<?php bloginfo('template_url'); ?>/assets/logo/logo.svg" alt="Logo" /></a>
                <div class="header__icons">
                    <?php 
                        $phone = get_field('whatsapp_phone'); 
                        $clean_phone = $phone ? preg_replace('/\D+/', '', $phone) : '';
                        $email = get_field('contact_email');
                    ?>
                    <?php if ( $clean_phone ): ?>
                    <a href="https://wa.me/<?php echo $clean_phone; ?>" target="_blank" rel="noopener noreferrer"><img
                            src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp.svg" alt="WhatsApp" /></a>
                    <?php if ( $email ): ?>
                    <a href="mailto:<?php echo esc_attr($email); ?>" target="_blank" rel="noopener noreferrer"><img
                            src="<?php bloginfo('template_url'); ?>/assets/icons/email.svg" alt="Email" /></a>
                    <?php endif; ?>
                    <a href="tel:<?php echo $clean_phone; ?>"><img src="<?php bloginfo('template_url'); ?>/assets/icons/phone.svg"
                            alt="Позвонить по номеру <?php echo esc_html($clean_phone); ?>" /></a>
                    <?php endif; ?>
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
    <footer class="footer bg-green">
        <div class="footer__wrapper container">
            <div class="footer__logo">
                <a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/logo/logo.svg" alt="Logo" /></a>
            </div>
            <nav class="footer__nav">
                <ul class="footer__nav-list text-black text-uppercase list-unstyled">
                    <li class="nav-list__item"><a class="text-decoration-none" href="#about">Обо мне</a></li>
                    <li class="nav-list__item"><a class="text-decoration-none" href="#services">Услуги и Прайс</a></li>
                    <li class="nav-list__item"><a class="text-decoration-none" href="#reviews">Отзывы</a></li>
                    <li class="nav-list__item"><a class="text-decoration-none" href="#game">Развивающая игра</a></li>
                    <li class="nav-list__item"><a class="text-decoration-none" href="#contacts">Контакты</a></li>
                </ul>
            </nav>
            <div class="footer__icons--mobile">
                <a href="https://wa.me/79111988524" target="_blank" rel="noopener noreferrer"><img
                        src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp.svg" alt="WhatsApp" /></a>
                <a href="mailto:mitornadya@yandex.ru" target="_blank" rel="noopener noreferrer"><img
                        src="<?php bloginfo('template_url'); ?>/assets/icons/email.svg" alt="Email" /></a>
                <a href="tel:+79111988524">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/phone.svg" alt="Позвонить по номеру +7 (911) 198-85-24" />
                </a>
            </div>
            <div class="footer__arrow">
                <a href="#header"><img src="<?php bloginfo('template_url'); ?>/assets/icons/ScrollUp.svg" alt="ScrollUp" /></a>
            </div>
        </div>
    </footer>

    <?php
    wp_footer();
    ?>

    </body>

    </html>
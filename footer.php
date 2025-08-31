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
                <a href="tel:<?php echo $clean_phone; ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/phone.svg" alt="Позвонить по номеру <?php echo esc_html($clean_phone); ?>" />
                </a>
                <?php endif; ?> 
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
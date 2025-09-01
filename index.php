<?php
get_header();
?>

<main>
    <section id="hero" class="hero">
        <div class="hero__wrapper container">
            <div class="hero__left">
                <div class="hero__textBlock text-uppercase ">
                    <h1>Кабинет Логопедической помощи</h1>
                    <p>путь к красивой и правильной речи начинается здесь</p>
                </div>
                <a class="hero__button btn" href="https://wa.me/79111988524" target="_blank"
                    rel="noopener noreferrer">Записаться на консультацию</a>
            </div>
            <div class="hero__imgBlock">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/dino-banner.png" alt="Динозаврик">
            </div>
        </div>
    </section>

    <section id="about" class="about section-common">
        <div class="about-wrapper container">
            <h2 class="about-title title-decorative">Обо мне</h2>
            <div class="about-content">
                <div class="about-texts">
                    <div class="about-text text-1">
                        <p class="about-paragraph">Рада приветствовать Вас! Меня зовут Надежда Юрьевна Митор, я
                            учитель-логопед.</p>
                        <h3 class="about-subtitle">Образование</h3>
                        <?php 
                        $articles = get_field('education_textarea');
                        if( $articles ):
                            $lines = explode("\n", $articles);
                            foreach($lines as $line): 
                                $line = trim($line);
                                if($line): ?>
                                    <div class="about-item__wrapper">
                                        <img class="about-tick" src="<?php bloginfo('template_url'); ?>/assets/icons/tick-icon.svg" alt="Галочка">
                                        <p class="about-item"><?php echo esc_html($line); ?></p>
                                    </div>
                            <?php endif;
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="about-text text-2">
                        <h3 class="about-subtitle">Курсы усовершенствования</h3>
                        <?php 
                        $articles = get_field('courses_textarea');
                        if( $articles ):
                            $lines = explode("\n", $articles);
                            foreach($lines as $line): 
                                $line = trim($line);
                                if($line): ?>
                                    <div class="about-item__wrapper">
                                        <img class="about-tick" src="<?php bloginfo('template_url'); ?>/assets/icons/tick-icon.svg" alt="Галочка">
                                        <p class="about-item"><?php echo esc_html($line); ?></p>
                                    </div>
                            <?php endif;
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="about-text text-3">
                        <h3 class="about-subtitle">Автор статей</h3>

                        <?php 
                        $articles = get_field('author_articles_textarea');
                        if( $articles ):
                            $lines = explode("\n", $articles);
                            foreach($lines as $line): 
                                $line = trim($line);
                                if($line): ?>
                                    <div class="about-item__wrapper">
                                        <img class="about-tick" src="<?php bloginfo('template_url'); ?>/assets/icons/tick-icon.svg" alt="Галочка">
                                        <p class="about-item"><?php echo esc_html($line); ?></p>
                                    </div>
                            <?php endif;
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="about-images">
                    <div class="about-image image-1">
                        <?php 
                        $img1 = get_field('about-image1'); 
                        if( $img1 ): ?>
                            <img src="<?php echo esc_url($img1); ?>" alt="Фото логопеда">
                        <?php endif; ?>
                    </div>
                    <div class="about-image image-2">
                        <?php 
                        $img2 = get_field('about-image2'); 
                        if( $img2 ): ?>
                            <img src="<?php echo esc_url($img2); ?>" alt="Фото логопеда">
                        <?php endif; ?>
                    </div>
                    <div class="about-image image-3">
                        <?php 
                        $img3 = get_field('about-image3'); 
                        if( $img3 ): ?>
                            <img src="<?php echo esc_url($img3); ?>" alt="Фото логопеда">
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="toys section-special bg-green-light">
        <div class="container">
            <div class="toys-content">
                <div class="toys-text">
                    <p>А помогать Вашему ребёнку на занятиях будет милый Динозаврик Гоша и его добрые друзья!</p>
                </div>
                <div class="toys-images-wrapper">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/girl-with-dino.webp" alt="Девочка с динозавром"
                        class="girl-with-dino">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dolls.png" alt="Друзья Гоши" class="dolls">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="services-block section-common">
            <div class="container">
                <h2 class="services__title title-decorative">Услуги и Прайс</h2>
                <div class="services-block__top text-black text-center">
                    <div class="services-block__card bg-pink rounded-20">Консультации для родителей</div>
                    <div class="services-block__card bg-pink rounded-20">Занятия по коррекции нарушений</div>
                    <div class="services-block__card bg-pink rounded-20">Логопедическое обследование детей
                        дошкольного и младшего школьного возраста</div>
                </div>
                <div class="services-block__arrows">
                    <img class="services-block__arrow" src="<?php bloginfo('template_url'); ?>/assets/icons/arrow-down.svg" alt="стрелка вниз">
                    <img class="services-block__arrow" src="<?php bloginfo('template_url'); ?>/assets/icons/arrow-down.svg" alt="стрелка вниз">
                </div>
                <div class="services-block__bottom text-black text-center">
                    <div class="services-block__card bg-green-light rounded-20">устной речи при дислалии, дизартрии,
                        общем
                        недоразвитии речи, фонетико – фонематическом
                        недоразвитии речи</div>
                    <div class="services-block__card bg-green-light rounded-20">письменной речи при дисграфии,
                        дислексии,
                        дизорфографии</div>
                </div>
            </div>
        </div>
        <div class="descr bg-violet-light section-special">
            <div class="container">
                <div class="descr__img-wrapper">
                    <img class="descr__img" src="<?php bloginfo('template_url'); ?>/assets/images/dino.png" alt="динозавр">
                    <div class="descr__img-text bg-white text-center">
                        Что ждёт Вашего ребёнка на занятии?
                    </div>

                </div>
                <div class="descr__card bg-violet rounded-20">
                    <ul class="text-black">
                        <li>Коррекция звукопроизношения</li>
                        <li>Коррекция и развитие лексико-грамматического строя речи</li>
                        <li>Развитие связной речи</li>
                        <li>Развитие навыков языкового анализа и синтеза</li>
                        <li>Развитие фонематических процессов</li>
                        <li>Обучение грамоте детей дошкольного возраста (чтение и письмо)</li>
                        <li>Профилактика нарушений чтения и письма у дошкольников (формирование функционального
                            базиса письма и чтения)</li>
                        <li>Подготовка к школе</li>
                        <li>Коррекция нарушения чтения и письма у школьников (дислексия, дисграфия, дизорфография)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="price section-special">
            <div class="container text-uppercase">
                <h2 class="price__title text-center">Прайс</h2>
                <div class="price__wrapper text-black">
                    <div class="price__item">
                        <p></p>
                        <p class="text-end">Время</p>
                        <p class="text-end">Стоимость</p>
                    </div>
                    <div class="price__item">
                        <p class="first-p">Диагностика нарушений устной речи</p>
                        <p class="text-end">30 минут</p>
                        <p class="text-end">1200₽</p>
                    </div>
                    <div class="price__item">
                        <p class="first-p">Диагностика нарушений устной/письменной речи</p>
                        <p class="text-end">45 минут</p>
                        <p class="text-end">1400₽</p>
                    </div>
                    <div class="price__item">
                        <p class="first-p">Диагностика нарушений устной/письменной речи</p>
                        <p class="text-end">60 минут</p>
                        <p class="text-end">1650₽</p>
                    </div>
                    <div class="price__item">
                        <p class="first-p">Индивидуальное занятие</p>
                        <p class="text-end">30 минут</p>
                        <p class="text-end">1200₽</p>
                    </div>
                    <div class="price__item">
                        <p class="first-p">Индивидуальное занятие</p>
                        <p class="text-end">45 минут</p>
                        <p class="text-end">1400₽</p>
                    </div>
                    <div class="price__item">
                        <p class="first-p">Индивидуальное занятие</p>
                        <p class="text-end">60 минут</p>
                        <p class="text-end">1650₽</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="reviews" class="reviews section-common">
        <div class="container">
            <h2 class="reviews-title title-decorative">Отзывы</h2>
            <div class="swiper reviews-swiper">

                <?php
                $args = array(
                    'post_type'      => 'review',
                    'posts_per_page' => -1,
                    'order'          => 'DESC',
                );
                $reviews = new WP_Query($args);
                if ($reviews->have_posts()): ?>
                    <div class="swiper-wrapper">
                        <?php while ($reviews->have_posts()): $reviews->the_post(); ?>
                            <div class="swiper-slide review-card">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/dino-frame.png" alt="Рамка" class="frame" />
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('large', ['class' => 'review-image']); ?>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; wp_reset_postdata(); ?>

                <div class="my-button-prev">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/left-arrow.svg" alt="Назад">
                </div>
                <div class="my-button-next">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/right-arrow.svg" alt="Вперёд">
                </div>
            </div>
        </div>
    </section>
    <section id="game" class="reading-game-section section-common">
    <div class="container">
        <h2 class="game-title title-decorative">
            Развивающая игра
        </h2>
        <div class="reading-game-wrapper">
            <div class="reading-game-content">
                <p><?php the_field('game_description_1'); ?></p>
                <p><?php the_field('game_description_2'); ?></p>
                <p><?php the_field('game_description_3'); ?></p>

                <p><span class="fw-bold">В наборе:</span></p>
                <p><?php the_field('game_set_description'); ?></p>

                <?php
                $list_raw = get_field('game_list');
                if ($list_raw):
                    $list_items = explode("\n", $list_raw);
                    echo '<ul class="game-list">';
                    foreach ($list_items as $item) {
                        echo '<li>' . esc_html(trim($item)) . '</li>';
                    }
                    echo '</ul>';
                endif;
                ?>

                <p><?php the_field('game_offer_text'); ?></p>

                <div class="btn-wrapper">
                    <?php if (get_field('game_button_url')): ?>
                        <a href="<?php echo esc_url(get_field('game_button_url')); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-game">
                            Приобрести игру
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="reading-game-visual">
                <div class="dino-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dino-animation.png" alt="Анимация динозавра" class="dino-animation" />
                    
                    <?php $image = get_field('game_image'); ?>
                    <?php if ($image): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="game-photo1" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="form-section section-common">
        <div class="container">
            <div class="form-wrapper">
                <div class="form-text">
                    <h3 class="form-title">Помогаю детям учиться говорить и развиваться!</h3>
                    <p class="form-subtext">Я рада помочь Вам и вашему ребёнку уже сегодня!
                        Оставьте заявку на
                        диагностику к профессионалу своего дела.</p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="a252526" title="Контактная форма"]'); ?>
                <div class="modal" id="privacy-modal">
                    <div class="modal-content">
                        <button class="close-modal">&times;</button>
                        <h2>Политика обработки персональных данных</h2>
                        <h3>1. Общие положения</h3>
                        <p>Настоящая Политика определяет порядок обработки и защиты персональных
                            данных
                            пользователей сайта <a href="https://кабинетлогопеда.рф"
                                target="_blank">https://кабинетлогопеда.рф</a> (далее –
                            «Сайт»).Оставляя свои данные
                            на Сайте, пользователь подтверждает согласие с настоящей Политикой.
                        </p>
                        <h3>2. Состав собираемых данных</h3>
                        <ul>
                            <li>имя;</li>
                            <li>адрес электронной почты;</li>
                            <li>номер телефона;</li>
                            <li>иные сведения, которые пользователь указывает добровольно в
                                формах на Сайте.</li>
                        </ul>
                        <h3>3. Цели обработки данных</h3>
                        <p>Персональные данные обрабатываются для:</p>
                        <ul>
                            <li>обратной связи с пользователями;</li>
                            <li>записи на консультацию и оказания услуг;</li>
                            <li>направления информации об услугах;</li>
                            <li>улучшения работы Сайта.</li>
                        </ul>
                        <h3>4. Правовые основания обработки</h3>
                        <p>Обработка персональных данных осуществляется в соответствии с
                            Федеральным законом РФ №
                            152-ФЗ «О персональных данных» и на основании согласия пользователя.
                        </p>
                        <h3>5. Порядок обработки и хранения</h3>
                        <ul>
                            <li>Обработка ведется с использованием автоматизированных и
                                неавтоматизированных
                                средств.</li>
                            <li>Данные хранятся до достижения целей обработки либо до отзыва
                                согласия пользователем.
                            </li>
                            <li>Мы принимаем необходимые меры для защиты данных от
                                несанкционированного доступа и
                                распространения.</li>
                        </ul>
                        <h3>6. Передача третьим лицам</h3>
                        <p>Мы не передаем персональные данные третьим лицам, кроме случаев,
                            установленных
                            законодательством РФ.</p>
                        <h3>7. Права пользователя</h3>
                        <p>Пользователь имеет право:</p>
                        <ul>
                            <li>получать сведения об обработке своих данных;</li>
                            <li>требовать их уточнения или удаления;</li>
                            <li>отозвать согласие, направив обращение на e-mail: [указать
                                почту].</li>
                        </ul>
                        <h3>8. Заключительные положения</h3>
                        <p>Мы можем обновлять Политику. Актуальная версия всегда доступна на
                            Сайте.</p>
                    </div>
                </div>
                <div class="form-image">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dino-form-withframe.png" alt="Динозаврик">
                </div>
            </div>
        </div>
    </section>

    <section id="contacts" class="contacts section-common">
        <div class="contacts__wrapper container">
            <h2 class="contacts__title title-decorative">Контакты</h2>
            <div class="contacts__content">
                <div class="contacts__text text-uppercase text-black">
                    <p class="contacts__label">наш Адрес:</p>
                    <a class="contacts__link text-decoration-none"
                        href="https://yandex.ru/map-widget/v1/?ll=30.315123%2C59.939095&mode=search&text=Санкт-Петербург,%20ул.%20Орбели,%2019&z=16"
                        target="_blank">Санкт-Петербург, ул. Орбели, 19</a>
                    <p class="contacts__label">телефон:</p>
                    <a class="contacts__link text-decoration-none" href="tel:+79111988524">+7
                        (911) 198-85-24</a>
                </div>
                <div class="contacts__map">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?ll=30.315123%2C59.939095&mode=search&text=Санкт-Петербург,%20ул.%20Орбели,%2019&z=16"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
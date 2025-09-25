<?php get_header(); ?>

<main class="error">
    <div class="error__wrapper container text-center">
        <h1>страница не найдена</h1>
        <!-- <p>К сожалению, страница не найдена.</p> -->
        <div class="error__image">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/sad-dino.webp" alt="sad dino">
        </div>
        <a class="hero__button btn" href="<?php echo home_url(); ?>">Вернуться на главную</a>
    </div>
</main>

<?php get_footer(); ?>
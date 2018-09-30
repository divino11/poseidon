<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package poseidon
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1 class="title_page"><?php the_title(); ?></h1>
            <div class="room_slider">
                <div class="owl-carousel owl-theme">
                    <?php $images = get_field('слайдер');
                    if ($images): ?>
                        <?php foreach ($images as $image): ?>
                            <div class="item">
                                <img src="<?php echo $image['sizes']['large']; ?>"
                                     alt="<?php echo $image['alt']; ?>" class="room_slider-img"/>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="container">
                <div class="col-md-8">
                    <div class="block_description_inner">
                        <div class="description_short_inner">
                            <?php the_field('краткое_описание_внутри'); ?>
                        </div>
                        <div class="square_inner">
                            Площадь <?php the_field('площадь'); ?> кв. м
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block_price_and_reserve">
                        <div class="inner_block_info">
                            <div class="col-md-6">
                                <div class="price_for_one"><i
                                            class="fas fa-user"></i> <?php the_field('цена_за_одного'); ?>
                                    грн
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="price_for_two"><i class="fas fa-user"></i><i
                                            class="fas fa-user"></i> <?php the_field('цена_за_двух'); ?> грн
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn_reserve_inner" type="button">Забронировать номер</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block_service_room">
                    <div class="col-md-4">
                        <p class="service_for_room">Оснащение номера</p>
                        <?php while (the_repeater_field('оснащение_номера')): ?>
                            <p class="services_text">&#8212; <?php the_sub_field('оснащение'); ?></p>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-md-4">
                        <p class="service_for_room">В стоимость включено</p>
                        <?php while (the_repeater_field('в_стоимость_включено')): ?>
                            <p class="services_text">&#8212; <?php the_sub_field('что_входит_в_стоимость'); ?></p>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-md-4">
                        <p class="service_for_room">Также в номере</p>
                        <?php while (the_repeater_field('также')): ?>
                            <p class="services_text">&#8212; <?php the_sub_field('также_в_номере'); ?></p>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="description_room_footer">
                    <div class="col-md-8">
                        <p class="description_pay">
                            Расчеты на территории Украины проводятся исключительно в национальной валюте по курсу
                            Национального
                            банка Украины относительно иностранных валют на день оплаты. При размещении детей в возрасте
                            до
                            5
                            лет (включительно) с родителями в одном номере без предоставления места, плата за проживание
                            детей
                            не взимается. Стоимость номера включает завтрак, доступ к сети Интернет (WiFi), телевещание,
                            косметической набор. Оплачивается дополнительно:
                            - страховой взнос за одного гражданина составляет 20 (двадцать) гривен за каждые сутки
                            проживания;
                            - туристический сбор в размере 1% от стоимости проживания взимается отдельно в случаях,
                            предусмотренных Налоговым кодексом Украины и решением Киевского городского совета от
                            30.12.2010г.
                            Гостиница принимает к оплате наличные деньги, кредитные карты Visa, Euro/MasterCard, также
                            возможна
                            безналичная форма оплаты. Номера гостиницы одного типа могут незначительно отличаться
                            интерьером.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image_service_room.png" class="image_footer_service" alt="">
                        <a href="<?php echo site_url() ?>/#services" class="btn link_to_service">Услуги гостиницы <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

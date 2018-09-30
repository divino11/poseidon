<?php
/*
Template Name: rooms
*/
get_header();
?>
<div id="rooms">
    <div class="container">
        <h1 class="title_page">Номера</h1>

        <?php
        $query = new WP_Query('cat=1&nopaging=1'); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
        if( $query->have_posts() ){
            while( $query->have_posts() ){ $query->the_post();
                ?>
                <div class="room_block">
                    <div class="room_block_header">
                        <div class="col-md-8">
                            <p class="room_title"><?php the_title(); ?></p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-6">
                                <p class="room_price">от <?php the_field('price_total'); ?> грн</p>
                            </div>
                            <div class="col-md-6">
                                <a href="" class="btn room_btn">Забронировать</a>
                            </div>
                        </div>
                    </div>
                    <div class="room_block_main">
                        <div class="room_block_main-img" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                        <a href="<?php the_permalink(); ?>" class="room__link"></a>
                        <div class="room_block_main-btn">
                            <div class="room_block-info-container">
                                <div class="room_block-info-text">
                                    <h3 class="btn room_img_btn">Подробнее</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room_block_footer">
                        <div class="col-md-8 room_description">
                                <?php the_field('краткое_описание'); ?>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-6 room_square">
                                Площадь
                            </div>
                            <div class="col-md-6 room_square_point">
                                <?php the_field('площадь'); ?> кв. м
                            </div>
                            <div class="col-md-6 room_count">
                                Вместимость
                            </div>
                            <div class="col-md-6 room_count_icon">
                                <?php
                                for ( $i = 0; $i < get_field('количество_людей'); $i++ ) {
                                    ?>
                                    <i class="fas fa-user"></i>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata(); // сбрасываем переменную $post
        }
        ?>
    </div>
</div>
<?php
get_footer();
?>

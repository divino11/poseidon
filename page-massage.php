<?php
/*
Template Name: massage
*/
get_header();
?>
<div class="container">
    <h1 class="title_page"><?php the_title(); ?></h1>
    <?php
    $query = new WP_Query('cat=3&nopaging=1'); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="massages">
                <div class="col-md-4">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="massage_img" alt="">
                </div>
                <div class="col-md-8">
                    <div class="massage_wrapper">
                        <p class="massage_title"><?php the_title(); ?></p>
                        <div class="massage_description">
                            <?php the_content(); ?>
                        </div>
                        <div class="massage_procedures">
                            <div class="col-md-4">
                                <div class="massage_time_procedure">
                                    <i class="far fa-clock"></i> <?php the_field('массажи_время_процедуры'); ?> мин
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="massage_price_procedure">
                                    <?php the_field('массажи_цена'); ?> грн
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="massage_btn_procedure">
                                    <button class="btn btn_massage">Заказать</button>
                                </div>
                            </div>
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
<?php
get_footer();
?>

<?php
/*
Template Name: hamam
*/
get_header();
?>
<div class="service__block-hamam">
    <div class="container">
        <div class="service__price">
            <div class="service__price-wrapper-top">
                <p class="service__price-title"><?php echo get_the_title(); ?></p>
                <p class="service__price-text">600<span class="service_grn">грн/час</span></p>
                <button class="btn btn__service" type="button">Заказать</button>
            </div>
            <div class="service__price-wrapper-bottom">
                <p class="service__point"><i class="far fa-clock"></i> 24/7</p>
                <p class="service__point"><i class="fas fa-wifi"></i> wifi</p>
                <p class="service__point"><i class="fas fa-thermometer-empty"></i> 80&#8451;</p>
                <p class="service__point"><i class="fas fa-user"></i> Поддержка</p>
            </div>
        </div>
    </div>
</div>
<div class="service__wrapper">
    <div class="container">
        <p class="service__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend mauris nec justo
            dapibus feugiat.
            Phasellus vehicula pretium sem quis porta. Suspendisse venenatis tellus vel mi vestibulum rhoncus. In hac
            habitasse platea dictumst. Nam convallis mauris eget posuere eleifend. Etiam nec molestie orci. Ut nunc
            purus, gravida sed arcu eu, imperdiet porttitor massa. Duis justo lectus, aliquet vitae erat nec, bibendum
            dignissim erat. Aenean hendrerit erat quis blandit viverra. Suspendisse convallis ullamcorper tempus.
            Integer porttitor, nisi ut consectetur imperdiet, felis quam vestibulum odio, id fringilla sem est ac eros.
            Nullam venenatis viverra enim, sed blandit mauris pretium eu.</p>
        <div class="service_slider">
            <div class="owl-carousel owl-theme">
                <?php $images = get_field('service_slider');
                if ($images): ?>
                    <?php foreach ($images as $image): ?>
                        <div class="item">
                            <img src="<?php echo $image['sizes']['large']; ?>"
                                 alt="<?php echo $image['alt']; ?>" class="service_slider-img"/>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="popup_hamam" style="display: none;">
    <div class="popup_container">
        <a class="close__popup">X</a>
        <form id="popup_service">
            <input type="hidden" name="name_service" value="Хамам">
            <input type="text" placeholder="Ваше имя" name="s_name" class="service_popup-input" required>
            <input type="tel" placeholder="Ваш телефон" name="s_phone" class="service_popup-input" required>
            <input type="button" value="Заказать" class="btn btn__service-reserve">
        </form>
    </div>
</div>
<?php
get_footer();
?>

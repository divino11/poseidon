<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poseidon
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="block7">
        <div class="block7_wrapper">
            <p>Зарезервируй номер в отеле "Посейдон" <button type="button" class="btnFooterReserve" id="reserveInFooter">Забронировать</button></p>
        </div>
    </div>
    <div class="block8">
        <p class="block8_title">Poseidon hotel and spa</p>
        <p class="block8_address">Украина, г. Харьков<br>ул. Ярославская 21</p>
        <a href="tel:+380683148797" class="block8_phone">+38 (068) 314 87 97</a>
        <p class="block8_developP"><a class="block8_develop" href="#">Developed by Itstorm <span><i class="fas fa-bolt"></i></span></a>
        </p>
    </div>
</footer><!-- #colophon -->
<div class="popup_footerReserve" style="display: none;">
    <div class="popup_container">
        <a class="close__popup">X</a>
        <form id="popup_footerReserve">
            <input type="hidden" name="name_service" value="Резервация номера">
            <input type="text" placeholder="Ваше имя" name="s_name" class="service_popup-input" required>
            <input type="tel" placeholder="Ваш телефон" name="s_phone" class="service_popup-input" required>
            <input type="button" value="Забронировать" class="btn btn__reserve-footer">
        </form>
    </div>
</div>
</div><!-- #page -->
<a id="to-top" class="mobile-enabled dark" style="bottom: 17px;">
    <i class="fa fa-angle-up"></i>
</a>
<?php wp_footer(); ?>
</body>
</html>

<?php
/*
Template Name: contacts
*/
get_header();
?>
<div class="page-contact">
    <div class="container">
        <div class="contact_wrapper">
            <div class="col-md-4">
                <p class="contact-title">
                    Хотите больше информации про отель Посейдон?
                </p>
                <p class="contact-name-hotel">Poseidon hotel and spa</p>
                <p class="contact-address">Украина, г. Харьков<br>
                    ул. Ярославская 21</p>
                <a href="tel:+380683148797" class="contact-number">+38 (068) 314 87 97</a>
            </div>
            <div class="col-md-8">
                <form id="contactForm" class="contactForm">
                    <input type="text" class="input-contact" name="c_name" placeholder="Ваше имя (обязательно)" required>
                    <input type="tel" class="input-contact" name="c_phone" placeholder="Ваш телефон">
                    <input type="email" class="input-contact" name="c_email" placeholder="Ваш email">
                    <textarea class="input-contact" name="c_message" placeholder="Ваше сообщение (обязательно)" required></textarea>
                    <button type="button" class="btn btn_contact">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

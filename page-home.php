<?php
/*
Template Name: home
*/
get_header();
?>
<div class="block1_home">
    <div class="container">
        <div class="block1_wrapper">
            <h1>Poseidon</h1>
            <h3>Hotel and spa</h3>
            <p>Kharkiv</p>
        </div>
    </div>
</div>
<div class="block2">
    <div class="col-md-4">
        <div class="block2_leftt">
            <p>Lorem ipsum</p>
        </div>
    </div>
    <div class="col-md-8">
        <div class="block2_rightt">
        </div>
    </div>
</div>
<div class="block3">
    <div class="col-md-8">
        <div class="block3_leftt">
        </div>
    </div>
    <div class="col-md-4">
        <div class="block3_rightt">
            <p>Lorem ipsum</p>
        </div>
    </div>
</div>
<div class="block4">
    <div class="col-md-4">
        <div class="block4_leftt">
            <p>Lorem ipsum</p>
        </div>
    </div>
    <div class="col-md-8">
        <div class="block4_rightt">
        </div>
    </div>
</div>
<div class="block5" id="services">
    <div class="col-md-4">
        <div class="block5_wrapper">
            <div class="block5_front">
                <div class="block5_front-wrapper1">
                    <img src="" alt="">
                    <p>Хамам</p>
                    <p></p>
                </div>
            </div>
            <div class="block5_back">
                <p>Хамам</p>
                <a class="btn block5_back-btn" href="<?php echo site_url() ?>/hamam">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="block5_wrapper">
            <div class="block5_front">
                <div class="block5_front-wrapper2">
                    <img src="" alt="">
                    <p>Сауна</p>
                    <p></p>
                </div>
            </div>
            <div class="block5_back">
                <p>Сауна</p>
                <a class="btn block5_back-btn" href="<?php echo site_url() ?>/sauna">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="block5_wrapper">
            <div class="block5_front">
                <div class="block5_front-wrapper3">
                    <img src="" alt="">
                    <p>Фитобочка</p>
                    <p></p>
                </div>
            </div>
            <div class="block5_back">
                <p>Фитобочка</p>
                <a class="btn block5_back-btn" href="<?php echo site_url() ?>/fitobochka">Подробнее</a>
            </div>
        </div>
    </div>
</div>
<div class="block6">
    <div class="block6_wrapper">
        <a href="<?php echo site_url() ?>/masazhi" class="block6_title">Масажи</a>
    </div>
</div>
<?php
get_footer();
?>


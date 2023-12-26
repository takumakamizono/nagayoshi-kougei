<?php
$outdoor_tit01 = get_field('outdoor-tit_01', 26);
$outdoor_titEN01 = get_field('outdoor-titEN_01', 26);
$outdoor_tit02 = get_field('outdoor-tit_02', 26);
$outdoor_titEN02 = get_field('outdoor-titEN_02', 26);
$outdoor_tit03 = get_field('outdoor-tit_03', 26);
$outdoor_titEN03 = get_field('outdoor-titEN_03', 26);
$outdoor_tit04 = get_field('outdoor-tit_04', 26);
$outdoor_titEN04 = get_field('outdoor-titEN_04', 26);

$store_tit01= get_field('store-tit_01', 26);
$store_titEN01 = get_field('store-titEN_01', 26);
$store_tit02= get_field('store-tit_02', 26);
$store_titEN02 = get_field('store-titEN_02', 26);
$store_tit03= get_field('store-tit_03', 26);
$store_titEN03 = get_field('store-titEN_03', 26);

$printing_tit03= get_field('printing-tit_01', 26);
$printing_titEN03 = get_field('printing-titEN_01', 26);


$outdoor01 = get_field('outdoor_01_01', 26);
$outdoor01 = get_field('outdoor_01_01', 26);
$outdoor02 = get_field('outdoor_02_01', 26);
$outdoor03 = get_field('outdoor_03_01', 26);
$outdoor04 = get_field('outdoor_04_01', 26);
$store01 = get_field('store_01_01', 26);
$store02 = get_field('store_02_01', 26);
$store03 = get_field('store_03_01', 26);
$printing01 = get_field('printing_01_01', 26);





?>
<section class="product">
    <div class="product__inner">
    <div class="section-titles">
            <h3 class="main-title">product</h3>
            <span class="sub-title">これまでの制作物の特集！</span>
        </div>
        <ul class="menu-list">
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($outdoor01); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($outdoor_tit01); ?></h2>
                    <a class="info" href="<?= get_term_link('outdoor-advertising', 'kind'); ?>"><?= esc_html($outdoor_titEN01); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($outdoor02); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($outdoor_tit02); ?></h2>
                    <a class="info" href="<?= get_term_link('induction', 'kind'); ?>"><?= esc_html($outdoor_titEN02); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($outdoor03); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($outdoor_tit03); ?></h2>
                    <a class="info" href="<?= get_term_link('construction-sign', 'kind'); ?>"><?= esc_html($outdoor_titEN03); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($outdoor04); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($outdoor_tit04); ?></h2>
                    <a class="info" href="<?= get_term_link('sign-pole', 'kind'); ?>"><?= esc_html($outdoor_titEN04); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($store01); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($store_tit01); ?></h2>
                    <a class="info" href="<?= get_term_link('guide-plate', 'kind'); ?>"><?= esc_html($store_titEN01); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($store02); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($store_tit02); ?></h2>
                    <a class="info" href="<?= get_term_link('store-sign', 'kind'); ?>"><?= esc_html($store_titEN02); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($store03); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($store_tit03); ?></h2>
                    <a class="info" href="<?= get_term_link('vehicle-lettering', 'kind'); ?>"><?= esc_html($store_titEN03); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($printing01); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($printing_tit03); ?></h2>
                    <a class="info" href="<?= get_term_link('banner', 'kind'); ?>"><?= esc_html($printing_titEN03); ?></a>
                    </div>
                </div>
            </li>
        </ul>


       
    </div>
</section>
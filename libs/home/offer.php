<?php 
    $offer_text = get_field('home_offer_text');
?>
<section class="offer animate" id="offer">
    <img src="<?php echo THEME_URL; ?>_dev/img/offerLogo.png" alt="offer logo" class="offerLogo fadeIn d-200">
    <img src="<?php echo THEME_URL; ?>_dev/img/offer.jpg" alt="oferta micron" class="offer--img">
    <div class="offer--inner fadeInRight">
        <?php echo $offer_text; ?>
    </div>
</section>
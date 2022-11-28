<?php 
    $trust_us_subtitle = get_field('home_trust_us_subtitle');
    $trust_us_title = get_field('home_trust_us_title');
?>

<section class="trustedUs" id="trusted_us">
    <img src="<?php echo THEME_URL; ?>_dev/img/Logo2.png" alt="" class="trustedUs--logo">
    <span class="title--small"><?php echo $trust_us_subtitle; ?></span>
    <h1><?php echo $trust_us_title; ?></h1>
    <div class="container">
        <?php if( have_rows('home_trust_us') ): ?>
            <div class="trustedUs--carousel">
                <?php while( have_rows('home_trust_us') ) : the_row();
                    $trust_us_url = get_sub_field('home_trust_us_url');
                    $trust_us_logo = get_sub_field('home_trust_us_logo');
                ?>
                    <a href="<?php echo $trust_us_url ;?>" target="_blank" class="trustedUs--item">
                        <img src="<?php echo $trust_us_logo['url']; ?>" alt="<?php echo $trust_us_logo['title']; ?>">
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="trustedUs--pagination">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

</section>
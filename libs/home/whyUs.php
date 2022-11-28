<?php 
    $whyus_subtitle = get_field('home_whyus_subtitle');
    $whyus_title = get_field('home_whyus_title');
?>

<section class="whyUs" id="why_us">
    <?php if( have_rows('home_whyus_columns') ): ?>

        <div class="whyUs--horizontal1"></div>
        <div class="whyUs--horizontal2"></div>
        <span class="title--small"><?php echo $whyus_subtitle; ?></span>
        <h1><?php echo $whyus_title; ?></h1>
            <div class="whyUs--inner animate">

                <?php while( have_rows('home_whyus_columns') ) : the_row();
                    $whyus_icon = get_sub_field('home_whyus_icon');
                    $whyus_icon_title = get_sub_field('home_whyus_icon_title');
                    $whyus_text = get_sub_field('home_whyus_text');
                ?>
        
                    <div class="whyUs--col fadeInBottomLow">
                        <div class="whyUs--icon">
                            <img src="<?php echo $whyus_icon['url']; ?>" alt="icon">
                        </div>
                        <img src="<?php echo THEME_URL;?>_dev/img/logoPin--small.png" alt="mikron-logo" class="whyUs--logo">
                        <span><?php echo $whyus_icon_title; ?></span>
                        <?php echo $whyus_text; ?>
                    </div>

                <?php endwhile; ?>
            </div>
    <?php endif; ?>
</section>

<img src="<?php echo THEME_URL; ?>_dev/img/gears.jpg" alt="" class="whyUs--gears">

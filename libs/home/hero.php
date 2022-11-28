<?php 
    $hero_title_gold = get_field('home_hero_title_gold');
    $hero_title_white = get_field('home_hero_title_white');
    $hero_text = get_field('home_hero_tekst');
    $hero_link = get_field('home_hero_link');
    $hero_phone = get_field('home_hero_phone');
    $hero_email = get_field('home_hero_email');

?>

<section class="hero animate">
    <div class="heroImage">
        <img src="<?php echo THEME_URL; ?>_dev/img/hero-image.jpg" alt="hero-background">
    </div>

    <div class="heroInner">
        <h1 class="fadeIn d-200">
            <span class="goldFont">
                <?php echo $hero_title_gold; ?>
            </span> 
            <?php echo $hero_title_white; ?>
        </h1>
        <p class="fadeIn d-200"><?php echo $hero_text; ?></p>
        <a href="<?php echo $hero_link['url']; ?>" class="outlineButton fadeIn d-600"><?php echo $hero_link['title']; ?></a>
        <div class="heroContact">
            <a href="<?php echo $hero_phone['url']; ?>" class="fadeInTopLow"><?php echo $hero_phone['title']; ?></a>
            <a href="<?php echo $hero_email['url']; ?>" class="fadeInBottomLow"><?php echo $hero_email['title']; ?></a>
        </div>
    </div>

    <div class="heroLine--horizontal"></div>
    
</section>
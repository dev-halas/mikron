<?php 
    $contact_subtitle = get_field('home_contact_subtitle');
    $contact_title = get_field('home_contact_title');
    $contact_text = get_field('home_contact_text');
?>

<section class="contact animate">
    <span class="title--small"><?php echo $contact_subtitle; ?></span>
    <h1><?php echo $contact_title; ?></h1>
    <div class="contact--inner container">
        <div class="contactText fadeInBottomLow">
            <?php echo $contact_text; ?>
        </div>
        <div class="contactForm fadeInTopLow">
            <?php echo do_shortcode('[contact-form-7 id="11" title="Kontakt"]'); ?>
        </div>
    </div>
</section>
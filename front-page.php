<?php get_header(); ?>
    <main>
        <div class="line--left"></div>
        <div class="line--right"></div>
        <?php 

            get_template_part('/libs/home/hero');
            get_template_part('/libs/home/offer');
            get_template_part('/libs/home/whyUs');
            get_template_part('/libs/home/trustedUs');
            get_template_part('/libs/home/map');
            get_template_part('/libs/home/contact');

        ?>
    </main>
<?php get_footer(); ?>
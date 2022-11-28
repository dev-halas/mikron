<?php 

    $map_subtitle = get_field('home_map_subtitle');
    $map_title = get_field('home_map_title');
    $map_link = get_field('home_map_link');

?>

<section class="mapContainer">
    <span class="title--small"><?php echo $map_subtitle; ?></span>
    <h1><?php echo $map_title; ?></h1>
    <a class="outlineButton"target="_blank" href="<?php echo $map_link['url']; ?>">
        <?php echo $map_link['title'] ?>
    </a>
    <div id="map"></div>
</section>
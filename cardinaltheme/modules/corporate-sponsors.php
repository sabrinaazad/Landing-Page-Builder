<?php

if ( get_sub_field("question") == "Level One" ) {
    $one = "one";
    $two = "";
    $three = "";
} 
if ( get_sub_field("question") == "Level Two") {
    $two = "two";
    $one = "";
    $three = "";
}
if ( get_sub_field("question") == "Level Three" ) {
    $three = "three";
    $two = "";
    $one = "";
} 

?>
<section class="section section--corporate-sponsors full-width" style="background-image: url( <?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <?php $heading = get_sub_field('sponsor_level');
        if ($heading) : ?>
            <div class="sponsor-level <?php echo $one; ?> <?php echo $two; ?> <?php echo $three; ?>">
                <h3 class="heading" style="color: <?php echo the_sub_field('heading_color')?>"><?php echo $heading; ?></h3>
            </div>
        <?php endif; ?>

        <div class="content-wrapper">

            <?php if (have_rows('companies')) : $count=0 ?>

                <?php while (have_rows('companies')) : the_row(); ?>
                    <div class="company panel-<?php echo $count ?>">

                        <?php $image = get_sub_field('logo');
                        if (($image)) : ?>
                            <div class="logo-wrapper">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endif; ?>

                        <div class="details-wrapper">
                            <?php $title = get_sub_field('title');
                            if ($title) : ?>
                                <h3 class="heading" style="color: <?php echo the_sub_field('title_color');?>"><?php echo $title; ?></h3>
                            <?php endif; ?>

                            <?php $subheading = get_sub_field('subheading');
                            if ($subheading) : ?>
                                <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
                            <?php endif; ?>

                            <?php $blurb = get_sub_field('blurb');
                            if ($blurb) : ?>
                                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php $count++; endwhile; ?>

            <?php endif; ?>

        </div>

    </div>
    <style>
        .section--corporate-sponsors .sponsor-level.one .heading {
            background-color: <?php echo the_sub_field('one_color'); ?>;
            border-color: <?php echo the_sub_field('one_border_color'); ?>;
        }
        .section--corporate-sponsors .sponsor-level.two .heading {
            background-color: <?php echo the_sub_field('two_color'); ?>;
            border-color: <?php echo the_sub_field('two_border_color'); ?>;
        }
        .section--corporate-sponsors .sponsor-level.three .heading {
            background-color: <?php echo the_sub_field('three_color'); ?>;
            border-color: <?php echo the_sub_field('three_border_color'); ?>;
        }
        .section--corporate-sponsors .content-wrapper .company .logo-wrapper::after {
            background-color: <?php echo the_sub_field('line_color'); ?>
        }
        .section--corporate-sponsors .content-wrapper .company .details-wrapper .heading,
        .section--corporate-sponsors .content-wrapper .company .details-wrapper .subheading {
            color: <?php echo the_sub_field('heading_color'); ?>;
        }
    </style>
</section>
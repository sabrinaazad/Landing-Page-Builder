<section class="section section--services-slider full-width" style="background-color:<?php echo get_sub_field('background_color'); ?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
            <?php endif; ?>
        </div>
        <?php
        if (have_rows('services_slider')) : ?>
            <div class="services_slider_v2">
                <?php while (have_rows('services_slider')) : the_row(); ?>
                    <a class="post" href="<?php the_sub_field('link') ?>">
                        <div class="content">
                            <div class="featured-image"><img src="<?php the_sub_field('image') ?>" alt="service icon" /></div>
                            <h4 class="uppercase" style="color: <?php echo the_sub_field('title_color');?>"><?php the_sub_field('title'); ?></h4>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>

        <?php endif; ?>

    </div>
    <style>
        .section--services-slider .services_slider_v2 .post:hover::after {
            background-color: <?php echo the_sub_field('service_bg_color'); ?>;
            color: <?php echo the_sub_field('service_color'); ?>;
        }
        .slick-slider .slick-dots li button:before {
            color: <?php echo the_sub_field('dots_color'); ?>;
        }
        .slick-slider .slick-dots li.slick-active button:before {
            color: <?php echo the_sub_field('dots_color_active'); ?>;
        }
    </style>
</section>
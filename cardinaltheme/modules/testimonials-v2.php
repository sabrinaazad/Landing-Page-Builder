<section class="section section--testimonials-v2" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <div class="subheading uppercase" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php if (have_rows('testimonial')) : ?>
            <div class="testimonials_slider_v2">
                <?php while (have_rows('testimonial')) : the_row(); ?>
                    <div class="testimonial">
                        <?php the_sub_field('quote'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <style>
        .section--testimonials-v2 .heading::after {
            background-color: <?php echo the_sub_field('line_color'); ?>
        }
        .section--testimonials-v2 .testimonials_slider_v2 .testimonial {
            border-color: <?php echo the_sub_field('border_color'); ?>;
            color: <?php echo the_sub_field('testimonial_color'); ?>
        }
        .section--testimonials-v2 .slick-slider .slick-dots li button:before {
            color: <?php echo the_sub_field('dots_color'); ?>
        }
        .section--testimonials-v2 .slick-slider .slick-dots li.slick-active button:before {
            color: <?php echo the_sub_field('dot_color_active'); ?>
        }
        .section--testimonials-v2 .testimonials_slider_v2 .testimonial::before {
            background-image: url(<?php echo the_sub_field('quote_left');  ?>);
        }
        .section--testimonials-v2 .testimonials_slider_v2 .testimonial::after {
            background-image: url(<?php echo the_sub_field('quote_right');  ?>);
        }
    </style>
</section>
<section class="section section--testimonials-v4" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <?php if (have_rows('slider')) : ?>
            <div class="testimonials_slider_v4">
                <?php while (have_rows('slider')) : the_row(); ?>
                    <div class="testimonial">
                        <div class="quote" style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field('blurb'); ?></div>
                        <div class="name" style="color: <?php echo the_sub_field('name_color');?>"><?php the_sub_field('name'); ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <style>
        .section--testimonials-v4 .testimonials_slider_v4 .slick-dots li button:before {
            color: <?php echo the_sub_field('dots_color'); ?>
        }
        .section--testimonials-v4 .testimonials_slider_v4 .slick-dots .slick-active button::before {
            color: <?php echo the_sub_field('dots_color_active'); ?>
        }
        .section--testimonials-v4 .testimonials_slider_v4 .testimonial::before {
            background-image: url(<?php echo the_sub_field('quote_left');  ?>);
        }
    </style>
</section>
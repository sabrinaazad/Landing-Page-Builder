<section class="section section--testimonials-v5" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <?php $image = get_sub_field('featured_image');
        if (($image)) : ?>
            <div class="featured-image">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        <?php endif; ?>
        <div class="content-wrapper">
            <?php if (get_sub_field('subheading')) : ?><div class="subheading" style="color: <?php the_sub_field('subheading_color'); ?>;"><?php the_sub_field('subheading'); ?></div><?php endif; ?>
            <?php if (get_sub_field('heading')) : ?><h2 class="heading" style="color: <?php the_sub_field('heading_color'); ?>;"><?php the_sub_field('heading'); ?></h2><?php endif; ?> 
            <?php if (have_rows('slider')) : ?>
                <div class="testimonials_slider_v5">
                    <?php while (have_rows('slider')) : the_row(); ?>
                        <div class="slide">
                            <?php if (get_sub_field('blurb')) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color'); ?>"><?php the_sub_field('blurb'); ?></div><?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : endif; ?>
        </div>
    </div>
    <style>
        .section--testimonials-v5 .testimonials_slider_v5 .slide::before {
            background-image: url(<?php echo the_sub_field('quote_left');  ?>);
        }
        .section--testimonials-v5 .testimonials_slider_v5 .slide::after {
            background-image: url(<?php echo the_sub_field('quote_right'); ?>);
        }
        .section--testimonials-v5 .testimonials_slider_v5 .slick-dots li button:before {
            color: <?php echo the_sub_field('dots_color'); ?>
        }
        .section--testimonials-v5 .testimonials_slider_v5 .slick-dots .slick-active button::before {
            color: <?php echo the_sub_field('dots_color_active'); ?>
        }
    </style>
</section>
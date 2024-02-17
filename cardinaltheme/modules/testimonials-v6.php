<section class="section section--testimonials-v6 full-width" style="background-image:url(<?php echo get_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id'); ?>">
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
                <div class="testimonials_slider_v6">
                    <?php while (have_rows('slider')) : the_row(); ?>
                        <div class="slide">
                            <?php if (get_sub_field('blurb')) : ?><div class="blurb" style="color: <?php the_sub_field('blurb_color'); ?>;"><?php the_sub_field('blurb'); ?></div><?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : endif; ?>
        </div>
    </div>
    <style>
        .section--testimonials-v6 .testimonials_slider_v6 .slide::before,
        .section--testimonials-v6 .testimonials_slider_v6 .slide::after {
            background-image: url(<?php echo get_sub_field('quote'); ?>);
        }
    </style>
</section>
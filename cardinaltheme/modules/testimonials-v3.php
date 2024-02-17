<section class="section section--testimonials-v3 full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <?php if (get_sub_field('subheading')) : ?><div class="subheading" style="color: <?php the_sub_field('subheading_color'); ?>;" ><?php the_sub_field('subheading'); ?></div><?php endif; ?>
        <?php if (get_sub_field('heading')) : ?><h2 class="heading" style="color: <?php the_sub_field('heading_color'); ?>;"><?php the_sub_field('heading'); ?></h2><?php endif; ?>
        <div class="two-col">
            <div class="col first">
            <?php $image = get_sub_field('featured_image');
                if (($image)) : ?>
                    <div class="featured-image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
            <?php endif; ?>

            </div>
            <div class="col second">
                <?php if (have_rows('slider')) : ?>
                    <div class="testimonials_slider_v3">
                        <?php while (have_rows('slider')) : the_row(); ?>
                            <div class="slide" style="background-color: <?php echo the_sub_field('slider_background') ?>;">
                                <?php if (get_sub_field('blurb')) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color') ?>;"><?php the_sub_field('blurb'); ?></div><?php endif; ?>
                                <div class="bio">
                                    <?php if (get_sub_field('name')) : ?><div class="name" style="color: <?php echo the_sub_field('name_color') ?>;"><?php the_sub_field('name'); ?></div><?php endif; ?>
                                    <?php if (get_sub_field('title')) : ?><div class="title" style="color: <?php echo the_sub_field('title_color') ?>;"><?php the_sub_field('title'); ?></div><?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : endif; ?>
            </div>
        </div>
    </div>
    <style>
        .section--testimonials-v3 .two-col .col.first .featured-image::after {
            background-color: <?php echo the_sub_field('image_bg') ?>;
        }
        .section--testimonials-v3 .two-col .col.second .testimonials_slider_v3 .slide::before {
            background-image: url(<?php echo the_sub_field('quote_left'); ?>);
        }

        .section--testimonials-v3 .two-col .col.second .testimonials_slider_v3 .slide::after {
            background-image: url(<?php echo the_sub_field('quote_right'); ?>);
        }  
    </style>
</section>
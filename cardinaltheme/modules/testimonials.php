<section class="section section--testimonials" id="<?php echo the_sub_field("id") ?>">
    <div class="two-col">
        <div class="col">
            <div class="content-wrapper">
                <?php if (get_sub_field('subheading')) : ?><div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php the_sub_field('subheading'); ?></div><?php endif; ?>
                <?php if (get_sub_field('heading')) : ?><h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php the_sub_field('heading'); ?></h2><?php endif; ?> 
                <?php if (have_rows('slider')) : ?>
                    <div class="testimonials_slider">
                        <?php while (have_rows('slider')) : the_row(); ?>
                            <div class="slide">
                                <?php if (get_sub_field('blurb')) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color'); ?>"><?php the_sub_field('blurb'); ?></div><?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : endif; ?>
            </div>
        </div>
        <div class="col">
            <?php $video = get_sub_field('featured_video');
            if (($video)) : ?>
                <div class="embed-container">
                    <?php echo $video ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <style>
        .section--testimonials .slick-slider .slick-dots li button:before {
            color: <?php echo the_sub_field('dots_color'); ?>
        }
        .section--testimonials .slick-slider .slick-dots li.slick-active button:before {
            color: <?php echo the_sub_field('dots_color_active'); ?>
        }
        .section--testimonials .testimonials_slider .slide::before {
            background-image: url(<?php echo the_sub_field('quote_left');  ?>);
        }
        .section--testimonials .testimonials_slider .slide::after {
            background-image: url(<?php echo the_sub_field('quote_right');  ?>);
        }
    </style>
</section>
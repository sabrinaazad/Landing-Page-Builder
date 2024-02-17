<section class="section section--featured-slider full-width" style="background-image: url(<?php echo the_sub_field('background_image');?>);" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <?php if (have_rows('slider')) : ?>
            <div class="featured-slider_v2">
                <?php while (have_rows('slider')) : the_row(); ?>

                    <div class="slide">
                        <div class="two-col">

                            <?php if (have_rows('left_column')) : ?>
                                <?php while (have_rows('left_column')) : the_row(); ?>

                                    <div class="first col">
                                        
                                    <?php $subheading = get_sub_field('subheading');
                                    if ($subheading) : ?>
                                        <div class="subheading" style="color: <?php the_sub_field('subheading_color'); ?>"><?php echo $subheading; ?></div>
                                    <?php endif;

                                    $heading = get_sub_field('heading');
                                    if ($heading) : ?>
                                        <h2 class="heading" style="color: <?php the_sub_field('heading_color'); ?>"><?php echo $heading; ?></h2>
                                    <?php endif; 
                                    
                                    $blurb = get_sub_field('blurb');
                                        if ($blurb) : ?>
                                            <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
                                    <?php endif; ?>

                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if (have_rows('right_column')) : ?>

                                <?php while (have_rows('right_column')) : the_row(); ?>

                                    <div class="second col">
                                        <?php if (get_sub_field('list_or_image') == 'List') { ?>
                                            <?php if (have_rows('list')) : ?>
                                                <ul class="list">
                                                    <?php while (have_rows('list')) : the_row(); ?>
                                                        <li>
                                                            <?php if (get_sub_field('icon')) : ?>
                                                                <div class="icon">
                                                                    <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if (get_sub_field('text')) : ?>
                                                                <div class="text" style="color: <?php echo the_sub_field('text_color');?>">
                                                                    <?php the_sub_field('text'); ?>
                                                                </div>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>
                                        <?php } elseif (get_sub_field('list_or_image') == 'Image') { ?>
                                            <?php $image = get_sub_field('image');
                                            if (($image)) : ?>
                                                <div class="image-wrapper">
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                </div>
                                            <?php endif; ?>
                                        <?php } ?>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php else : endif; ?>
    </div>
    <style>
        .section--featured-slider .section-wrapper .featured-slider_v2 .slide .list {
            background-color: <?php the_sub_field('list_background_color'); ?>;
        }
        .section--featured-slider .section-wrapper .featured-slider_v2 .slide .list li .icon {
            border-color: <?php the_sub_field('icon_border_color'); ?>;
        }
        .section--featured-slider .section-wrapper .slick-slider .slick-dots li button:before {
            color: <?php the_sub_field('dot_color'); ?>;
        }
        .section--featured-slider .section-wrapper .slick-slider .slick-dots .slick-active button:before {
            color: <?php the_sub_field('dot_color_active'); ?>;
        }
    </style>
</section>
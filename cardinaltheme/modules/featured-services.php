<section class="section section--featured-services full-width no-padded-sides no-padded-bottom" id="<?php echo the_sub_field('id'); ?>">
    
    <?php $featuredimage = get_sub_field('featured_image'); 
    if ($featuredimage) : ?>    
    <div class="featured-image-wrapper">
       <img src="<?php echo esc_url($featuredimage['url']); ?>" alt="<?php echo esc_attr($featuredimage['alt']); ?>" class="image" />  
    </div>
    <?php endif; ?>

    <div class="background-image" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
        <div class="section-wrapper">
            <div class="content">

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
            <?php
            if (have_rows('services')) : ?>
                <div class="featured_slider">
                    <?php while (have_rows('services')) : the_row(); ?>
                        <div class="slide">
                            <div class="icon"><img src="<?php the_sub_field('icon'); ?>" /></div>
                            <h4 class="uppercase" style="color: <?php the_sub_field('title_color'); ?>"><?php the_sub_field('title'); ?></h4>
                            <?php the_sub_field('blurb'); ?>
                            <?php $link = get_sub_field('link');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <div class="button-wrapper">
                                    <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_background_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                </div>
                            <?php endif; ?>
                            
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php $link = get_sub_field('link');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="btn btn-secondary" style="background-color: <?php echo the_sub_field('button_background_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <style>
        .section--featured-services .featured_slider .slick-current .slide {
            background-color: <?php echo the_sub_field('active_slide_background_color'); ?>
        }

        .section--featured-services .featured_slider .slick-current .slide .btn {
            color: <?php echo the_sub_field('active_slide_button_color'); ?>;
            background-color: <?php echo the_sub_field('active_slide_button_background_color'); ?>
        }

        .section--featured-services .featured_slider .slide .btn {
            color: <?php echo the_sub_field ('slide_button_color'); ?>;
            background-color: <?php echo the_sub_field ('slide_button_background_color'); ?>;
        }
    </style>
</section>
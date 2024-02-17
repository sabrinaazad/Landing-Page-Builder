<section class="section section--icon-title-slider full-width" style="background-image: url(<?php echo the_sub_field('background_image');?>);" id="<?php echo the_sub_field('id'); ?>">

    <div class="section-wrapper">
        <div class="content">

            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
            <?php endif; ?>

        </div>
        <div class="icon_title_slider">
            <?php if (have_rows('icons_slider')) : while (have_rows('icons_slider')) : the_row(); ?>
                <?php if (get_sub_field("link")) : ?>
                <a class="slide" href="<?php the_sub_field("link"); ?>">
                <div>
                    <div class="icon"><img src="<?php echo the_sub_field("icon") ?>" /></div>
                    <div class="title"><?php echo the_sub_field("title") ?></div>
                </div>
                </a>
                <?php else: ?>
                <div class="slide">
                <div>
                    <div class="icon"><img src="<?php echo the_sub_field("icon") ?>" /></div>
                    <div class="title"><?php echo the_sub_field("title") ?></div>
                </div>
                </div>
                <?php endif; ?>
             <?php endwhile; else : endif; ?>
        </div>

        <?php $link = get_sub_field('button');
        if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_bg_color');?>;color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
        <style>
            .section--icon-title-slider .icon_title_slider .slide .icon {
                border-color: <?php echo the_sub_field ('icon_border_color'); ?>;
            }

            .section--icon-title-slider .icon_title_slider .slide .title {
                background-color: <?php echo the_sub_field ('title_bg_color'); ?>;
                color: <?php echo the_sub_field ('title_color'); ?>;
            }

            .section--icon-title-slider .icon_title_slider a.slide:hover .icon,
            .section--icon-title-slider .icon_title_slider a.slide:hover .title {
                background-color: <?php echo the_sub_field ('hover_bg_color'); ?>;
                color: <?php echo the_sub_field ('hover_title_color'); ?>;
            }
            .section--icon-title-slider .slick-slider .slick-dots li button:before {
                color: <?php echo the_sub_field('dots_color'); ?>
            }
            .section--icon-title-slider .slick-slider .slick-dots li.slick-active button:before {
                color: <?php echo the_sub_field('dot_color_active'); ?>
            }
        </style>

</section>
<section class="section section--feature-banner full-width" style="background-color: <?php echo the_sub_field('background_color');?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="two-col">

            <div class="col">
                <?php $featuredimage = get_sub_field('featured_image');
                if ($featuredimage) : ?>
                    <div class="featured-image-wrapper">
                        <img src="<?php echo esc_url($featuredimage['url']); ?>" alt="<?php echo esc_attr($featuredimage['alt']); ?>" class="image" />
                    </div>
                <?php endif; ?>
            </div>

            <div class="col">
                <?php if (have_rows('banner')) : ?>

                    <div class="banners_slider">

                        <?php while (have_rows('banner')) : the_row(); ?>

                            <div class="banner">

                                <?php $subheading = get_sub_field('subheading');
                                if ($subheading) : ?>
                                    <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
                                <?php endif; ?>

                                <?php $heading = get_sub_field('heading');
                                if ($heading) : ?>
                                    <h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h2>
                                <?php endif; ?>

                                <?php $blurb = get_sub_field('blurb');
                                    if ($blurb) : ?>
                                        <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
                                <?php endif; ?>

                                <?php $link = get_sub_field('button');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <div class="button-wrapper">
                                        <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    </div>
                                <?php endif; ?>

                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php else : endif; ?>
            </div>
        </div>
    </div>
    <style>
        .section--feature-banner .two-col .col:first-child .featured-image-wrapper {
            background-image: url(<?php echo the_sub_field('featured_background_image') ?>);
        }
    </style>
</section>
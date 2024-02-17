<section class="section section--locations-grid" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
        <div class="content align--center">

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
                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color'); ?>"><?php echo $blurb; ?></div>
            <?php endif; ?>

        </div>
        <div class="locations_slider">
            <?php if (have_rows('grid')) : while (have_rows('grid')) : the_row(); ?>
                    <div class="location-wrapper">
                        <div class="map">
                            <?php echo the_sub_field("map") ?>
                        </div>
                        <div class="location-content">
                            <?php echo the_sub_field("content") ?>
                        </div>
                        <?php $link = get_sub_field('button');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <div class="button-wrapper">
                                <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_background_color'); ?>; color: <?php echo the_sub_field('button_color'); ?>;" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            </div>
                        <?php endif; ?> 
                    </div>
            <?php endwhile; else :  endif; ?>
        </div>
    </div>
</section>
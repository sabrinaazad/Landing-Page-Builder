<section class="section section--tiles" id="<?php echo the_sub_field('id'); ?>">

    <div class="section-wrapper">

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
            <div class="blurb" style="color: <?php echo the_sub_field('blurb_color'); ?>"><?php echo $blurb; ?></p>
        <?php endif; ?>

        <?php
        if (have_rows('tiles')) : ?>
            <div class="tiles_slider">
                <?php while (have_rows('tiles')) : the_row(); ?>
                    <div class="slide">
                        <div class="icon"><img src="<?php the_sub_field('icon'); ?>" /></div>
                        <h4 class="title" style="color: <?php the_sub_field('title_color'); ?>"><?php the_sub_field('title'); ?></h4>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php $button = get_sub_field('button');
        if ($button) :
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';
        ?>
            <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_background_color'); ?>; color: <?php echo the_sub_field('button_color'); ?>;" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
        <?php endif; ?>
    </div>
</section>
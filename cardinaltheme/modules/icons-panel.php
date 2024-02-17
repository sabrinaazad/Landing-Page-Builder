<section class="section section--icons-panel full-width" style="background-image: url('<?php echo the_sub_field('background_image') ?>')" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center">
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
        </div>
        <?php if (have_rows('icons_panel')) : ?>

            <div class="icons-panel">

                <?php while (have_rows('icons_panel')) : the_row(); ?>
                    <?php $icon = get_sub_field('icon');
                    $heading = get_sub_field('heading');
                ?>

                    <div class="panel">
                        <div class="icon">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        </div>
                        <h4 class="uppercase" style="color: <?php echo the_sub_field('title_color');?>"><?php echo $heading ?></h4>
                    </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>
</section>
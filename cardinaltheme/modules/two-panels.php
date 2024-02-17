<section class="section section--two-panels full-width" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <div class="subheading align--center" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading align--center" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="align--center" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
            <?php endif; ?>
        </div>
        <div class="panels">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                    <div class="panel">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <h4 class="heading" style="color: <?php echo the_sub_field('title_color');?>"><?php the_sub_field('heading'); ?></h4>
                        <p style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field('blurb'); ?></p>
                    </div>
            <?php endwhile; else :  endif; ?>
        </div>
    </div>
    <style>
        .section--two-panels {
            background-image: url(<?php echo the_sub_field('background_image'); ?>);
        }
    </style>
</section>
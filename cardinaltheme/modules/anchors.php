<section class="section section--anchors" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <div class="heading-wrapper align--center">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <div class="subheading align--center" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading align--center" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
            <?php endif; ?>
        </div>

        <?php if (have_rows('anchors')) : ?>

            <div class="anchor_slider">

                <?php while (have_rows('anchors')) : the_row(); ?>

                    <a class="anchor-box" href="#<?php echo the_sub_field('id') ?>">
                        <img src="<?php echo the_sub_field('icon') ?>" alt="icon" />
                        <h4 style="color: <?php echo the_sub_field('label_color'); ?>"><?php echo the_sub_field('label') ?></h4>
                    </a>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>

    <style>
        .section--anchors .anchor_slider .anchor-box:hover::after {
            background-color: <?php echo the_sub_field('hover_bg_anchor') ?>;
            color: <?php echo the_sub_field('hover_color_anchor') ?>;
        }
    </style>

</section>
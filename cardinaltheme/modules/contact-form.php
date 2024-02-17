<section class="section section--contact-form full-width no-padded-sides" id="<?php echo the_sub_field("id") ?>">
    <div class="two-col" style="background-color: <?php echo the_sub_field('background_color'); ?>">

        <div class="col">
            <div class="section-wrapper">

                <?php $subheading = get_sub_field('subheading');
                if ($subheading) : ?>
                    <div class="subheading" style="color: <?php echo the_sub_field('subheading_color'); ?>"><?php echo $subheading; ?></div>
                <?php endif; ?>

                <?php $heading = get_sub_field('heading');
                if ($heading) : ?>
                    <h3 class="heading" style="color: <?php echo the_sub_field('heading_color'); ?>"><?php echo $heading; ?></h3>
                <?php endif; ?>

                <?php $blurb = get_sub_field('blurb');
                if ($blurb) : ?>
                    <div class="blurb" style="color: <?php echo the_sub_field('blurb_color'); ?>"><?php echo $blurb; ?></div>
                <?php endif; ?>

                <?php echo do_shortcode(get_sub_field('contact_form')); ?>

            </div>
        </div>

        <div class="col">
            <?php $image = get_sub_field('image');
            if (($image)) : ?>
                <div class="image-wrapper" style="background-image: url(<?php echo $image; ?>)">

                </div>
            <?php endif; ?>

        </div>

    </div>
    <style>
        .section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme .gform_footer input {
            background-color: <?php echo the_sub_field('button_background_color'); ?>;
            color: <?php echo the_sub_field('button_color'); ?>;
        }
    </style>
</section>
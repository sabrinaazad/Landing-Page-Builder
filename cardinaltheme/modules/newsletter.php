<section class="section section--newsletter full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="two-col">
            <div class="left col">
                <div class="content-wrapper">
                    <?php $subheading = get_sub_field('subheading');
                    if ($subheading) : ?>
                        <div class="subheading" style="color: <?php the_sub_field('subheading_color'); ?>;"><?php echo $subheading; ?></div>
                    <?php endif; ?>

                    <?php $heading = get_sub_field('heading');
                    if ($heading) : ?>
                        <h2 class="heading" style="color: <?php the_sub_field('heading_color'); ?>;"><?php echo $heading; ?></h2>
                    <?php endif; ?>

                    <?php $blurb = get_sub_field('blurb');
                    if ($blurb) : ?>
                        <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
                    <?php endif; ?>
                </div>
                <div class="form">
                    <?php echo do_shortcode(get_sub_field('contact_form')); ?>
                </div>
            </div>
            <div class="right col">
                <?php $image = get_sub_field('image');
                if (($image)) : ?>
                    <div class="image-wrapper">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <style>
        .section--newsletter-v2 .two-col .col:first-child .content-wrapper {
            background-color: <?php echo the_sub_field('content_background_color');?>;
        }
        .section--newsletter-v2 .two-col .col:first-child .form {
            background-color: <?php echo the_sub_field('form_background_color');?>;
        }
        .btn-primary, .section--newsletter-v2 .two-col .col:first-child .form .gform_footer .gform_button {
            background-color: <?php echo the_sub_field('form_button_background_color');?>;
            color: <?php echo the_sub_field('form_button_color');?>;
        }
    </style>
</section>
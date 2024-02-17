<section class="section section--packages full-width" style="background-color: <?php echo the_sub_field('bg_color');?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper">

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
        <div class="package-slider">
            <?php if (have_rows('package')) : while (have_rows('package')) : the_row(); ?>

                    <div class="package">
                        <h4 class="title" style="color: <?php echo the_sub_field('title_color');?>"><?php the_sub_field('title'); ?></h4>
                        <p class="price" style="color: <?php echo the_sub_field('price_color');?>"><?php the_sub_field('price'); ?></p>
                        <div style="color: <?php echo the_sub_field('list_color');?>"><?php the_sub_field('list'); ?></div>
                        <?php $button = get_sub_field('button');
                        if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self'; ?>
                            <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                        <?php endif; ?>
                    </div>

            <?php endwhile;
            else : endif; ?>
        </div>
    </div>
    <style>
        .section--packages .package-slider .package .title::after {
            background-color: <?php echo the_sub_field('line_color'); ?>
        }
        .section--packages .package-slider .package ul li::before {
            color: <?php echo the_sub_field('dots_color'); ?>
        }
        .section--packages .package-slider .package {
            border-color: <?php echo the_sub_field('panel_border_color') ?>
        }
    </style>
</section>
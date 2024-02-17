<section class="section section--memberships full-width" style="background-image: url('<?php echo the_sub_field('background_image') ?>')" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <div class="heading-wrapper align--center">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <span class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></span>
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

        <?php if (have_rows('memberships_panel')) : ?>

            <div class="memberships_slider">

                <?php while (have_rows('memberships_panel')) : the_row(); ?>
                    <?php $title = get_sub_field('title');
                    $price = get_sub_field('price');
                    $price2 = get_sub_field('price2');
                    $link = get_sub_field('button');
                    ?>
                    <div class="panel">
                        <h4 class="uppercase" style="color: <?php echo the_sub_field('title_color');?>;"><?php echo $title; ?></h4>
                        <div class="price" style="color: <?php echo the_sub_field('price_color');?>;"><span class="dollar">$<?php echo $price; ?></span><span class="cent">.<?php echo $price2; ?></span></div>

                        <?php if (have_rows('details')) : ?>
                            <div class="details">
                                <?php while (have_rows('details')) : the_row(); ?>
                                    <?php $detail = get_sub_field('detail'); ?>
                                    <div class="detail" style="color: <?php echo the_sub_field('detail_color');?>;"><?php echo $detail; ?></div>
                                <?php endwhile; ?>
                            </div>
                        <?php else : endif; ?>

                        <?php if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <div class="button-wrapper">
                                <a class="btn btn-white" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>

            </div>

        <?php else : endif; ?>
    </div>
    <style>
        .section--memberships .memberships_slider .panel h4,
        .section--memberships .memberships_slider .panel .button-wrapper {
            background-color: <?php echo the_sub_field('panel_bg_color'); ?>;
        }
        .section--memberships .memberships_slider .panel:nth-child(even) h4, 
        .section--memberships .memberships_slider .panel:nth-child(even) .button-wrapper {
            background-color: <?php echo the_sub_field('panel_bg_color_even'); ?>;
        }
        .section--memberships .memberships_slider .panel .price .cent::after {
            content: "<?php echo the_sub_field('label'); ?>";
        }
    </style>
</section>
<section class="section section--services-location full-width no-padded-sides" id="<?php echo the_sub_field("id") ?>">

    <div class="two-col">
        <div class="col">
            <div class="content-wrapper">

                <?php $subheading = get_sub_field('subheading');
                if ($subheading) : ?>
                    <span class="subheading" style="color: <?php the_sub_field('subheading_color'); ?>;"><?php echo $subheading; ?></span>
                <?php endif;

                $heading = get_sub_field('heading');
                if ($heading) : ?>
                    <h2 class="heading" style="color: <?php the_sub_field('heading_color'); ?>;"><?php echo $heading; ?></h2>
                <?php endif;

                $blurb = get_sub_field('blurb');
                if ($blurb) : ?>
                    <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
                <?php endif; ?>

            </div>
            <div class="services_slider">
                <?php if (have_rows('services')) : while (have_rows('services')) : the_row(); ?>
                        <?php if (get_sub_field("link")) : ?>
                            <a class="slide" href="<?php the_sub_field("link"); ?>">
                                <div class="icon" style="border-color: <?php echo the_sub_field('border_icon_color'); ?>;"><img src="<?php echo the_sub_field("icon") ?>" /></div>
                                <div class="title" style="color: <?php echo the_sub_field('title_color'); ?>;"><?php echo the_sub_field("title") ?></div>
                            </a>
                        <?php else : ?>
                            <div class="slide">
                                <div class="icon"><img src="<?php echo the_sub_field("icon") ?>" /></div>
                                <div class="title" style="color: <?php echo the_sub_field('title_color'); ?>;"><?php echo the_sub_field("title") ?></div>
                            </div>
                        <?php endif; ?>
                <?php endwhile; else : endif; ?>
            </div>
        </div>

        <div style="background-color: <?php the_sub_field('panels_bg'); ?>;" class="col">
            <div class="panels">

                <div class="map-wrapper">
                    <iframe src="<?php echo the_sub_field("map") ?>" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <?php if(get_sub_field("label")) : ?><div class="label uppercase"style="color: <?php echo the_sub_field('label_color'); ?>;"><?php echo the_sub_field("label") ?></div><?php endif; ?>

                <?php if(get_sub_field("address")) : ?>
                <div class="panel">
                    <img src="/wp-content/themes/cardinaltheme/assets/icon-location.png" alt="location icon" />
                    <div class="content" style="color: <?php echo the_sub_field('content_color'); ?>;">
                        <?php the_sub_field("address"); ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(get_sub_field("directions")) : ?>
                <div class="button-wrapper">
                    <a href="<?php the_sub_field("directions"); ?>" style="background-color: <?php the_sub_field('btn_bg_color'); ?>; color: <?php the_sub_field('btn_color'); ?>; border-color: <?php the_sub_field('btn_bg_color'); ?>;" class="btn btn-white">Get Directions</a>
                </div>
                <?php endif; ?>
                
                <?php if(get_sub_field("phone")) : ?>
                <div class="panel">
                    <img src="/wp-content/themes/cardinaltheme/assets/icon-phone-number.png" alt="phone icon" />
                    <div class="content">
                        <a href="tel:<?php the_sub_field("phone"); ?>"><?php the_sub_field("phone"); ?></a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(get_sub_field("fax")) : ?>
                <div class="panel">
                    <img src="/wp-content/themes/cardinaltheme/assets/icon-fax-machine.png" alt="fax icon" />
                    <div class="content">
                        <a href="tel:<?php the_sub_field("fax"); ?>"><?php the_sub_field("fax"); ?></a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(get_sub_field("email")) : ?>
                <div class="panel">
                    <img src="/wp-content/themes/cardinaltheme/assets/icon-email.png" alt="email icon" />
                    <div class="content">
                        <a href="mailto:<?php the_sub_field("email"); ?>"><?php the_sub_field("email"); ?></a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (have_rows('hours')) : ?>
                    <div class="panel">
                        <img src="/wp-content/themes/cardinaltheme/assets/icon-hours.png" alt="hours icon" />
                        <div class="content">
                            <div class="hours-wrapper">
                                <?php while (have_rows('hours')) : the_row(); ?>
                                    <div class="hours">
                                        <?php the_sub_field("title"); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                <?php else : endif; ?>
            </div>
        </div>
    </div>
    <style>
        @media only screen and (min-width: 768px) {
            .section--services-location .two-col .col:nth-child(2)::after {
                background-color:  <?php the_sub_field('panels_bg'); ?>;
            }
        }

        .section--services-location .panels .panel .hours-wrapper .hours {
            color: <?php the_sub_field('hours_color'); ?>;
        }
        .section--services-location a.slide:hover .icon, 
        .section--services-location a.slide:hover .title {
            border-color: <?php the_sub_field('panels_bg'); ?>;
            background-color: <?php the_sub_field('panels_bg'); ?>;
            color: white;
        }
    </style>
</section>
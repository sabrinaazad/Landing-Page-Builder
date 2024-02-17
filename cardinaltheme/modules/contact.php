<section class="section section--contact full-width" style="background-image: url(<?php echo the_sub_field('background_image') ?>);" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="two-col">

            <div class="col first">
                <div class="location-details">
                    <a class="phone" href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
                    <div class="hours">
                        <div class="title"><?php the_sub_field('hours_title'); ?></div>
                        <div class="text"><?php the_sub_field('hours'); ?></div>
                    </div>
                </div>
                <div class="contact-details">
                    <h3><?php the_sub_field('contact_title'); ?></h3>
                    <?php if (have_rows('team_members')) : ?>
                    <div class="team">
                        <?php while (have_rows('team_members')) : the_row(); ?>
                            <?php                                
                                $name = get_sub_field('name');
                                $title = get_sub_field('title');
                                $phone = get_sub_field('phone');
                                $email = get_sub_field('email');
                            ?>
                            <div class="team-member">
                                <div class="name"><?php echo $name ?></div>
                                <div class="title"><?php echo $title ?></div>
                                <a class="phone" href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                                <a class="email" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php else : endif; ?>
                </div>
            </div>

            <div class="col second" style="background-color: <?php echo the_sub_field('contact_background_color'); ?>"> 
                <div class="subheading desktop-only" style="color: <?php echo the_sub_field('subheading_color');?>"><?php the_sub_field('subheading'); ?></div>
                <h3 class="heading desktop-only" style="color: <?php echo the_sub_field('heading_color');?>"><?php the_sub_field('heading'); ?></h3>
                <div class="form">
                    <?php echo do_shortcode(get_sub_field('contact_form')); ?>
                </div> 
            </div>
        </div>
    </div>
    <style>
        .section--contact .two-col .location-details,
        .section--contact .two-col .contact-details {
            border-color: <?php echo the_sub_field('border_color'); ?>;
        }
        .section--contact .two-col .location-details .phone,
        .section--contact .two-col .location-details .hours .title,
        .section--contact .two-col .location-details .hours .text,
        .section--contact .two-col .contact-details .team .team-member .name,
        .section--contact .two-col .contact-details .team .team-member .title,
        .section--contact .two-col .contact-details h3 {
            color: <?php echo the_sub_field('location_details_text_color'); ?>
        }

        .section--contact .two-col .second .form .gform_button.button {
            color: <?php echo the_sub_field('button_color'); ?>;
            background-color: <?php echo the_sub_field('button_background_color'); ?>;
        }
        .section--contact .two-col .location-details .phone::before {
            background-image: url(<?php echo get_sub_field('phone_icon') ?>);
        }
        .section--contact .two-col .location-details .hours .title::before {
            background-image: url(<?php echo get_sub_field('hours_icon') ?>);
        }
        .section--contact .two-col .contact-details .team .team-member .phone::before {
            background-image: url(<?php echo get_sub_field('phone_icon') ?>);
        }
        .section--contact .two-col .contact-details .team .team-member .email::before {
            background-image: url(<?php echo get_sub_field('email_icon') ?>);
        }
    </style>
</section>
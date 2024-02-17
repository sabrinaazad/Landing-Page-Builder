<section class="section section--team-members-v2 full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <div class="subheading align--center" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading align--center" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h2>
        <?php endif; ?>


        <div class="team_slider_4">
            <?php if (have_rows('team_member')) : while (have_rows('team_member')) : the_row(); ?>
                    <div class="slide">
                        <img src="<?php the_sub_field('image'); ?>" alt="team member" />
                    </div>
            <?php endwhile; endif; ?>
        </div>

        <div class="team_slider_3">
            <?php if (have_rows('team_member')) : while (have_rows('team_member')) : the_row(); ?>
                    <div class="slide">
                        <div class="image-wrapper">
                            <img src="<?php the_sub_field('image'); ?>" alt="team member" />
                        </div>
                        <div class="content">
                            <h3 class="heading"><?php the_sub_field('name'); ?></h3>
                            <div class="subheading"><?php the_sub_field('title'); ?></div>
                            <div class="phone"><a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a></div>
                            <div class="email"><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></div>
                            <div class="bio"><?php the_sub_field('bio'); ?></div>
                        </div>
                    </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <style>
        .section--team-members-v2 .team_slider_3 .slide .content {
            background-color: <?php echo the_sub_field('content_bg_color'); ?>;
        }
        .section--team-members-v2 .team_slider_3 .slide .content .subheading,
        .section--team-members-v2 .team_slider_3 .slide .content .heading,
        .section--team-members-v2 .team_slider_3 .slide .content .phone a,
        .section--team-members-v2 .team_slider_3 .slide .content .email a,
        .section--team-members-v2 .team_slider_3 .slide .content .bio {
            color: <?php echo the_sub_field('content_color'); ?>;
        }
        <?php if( get_sub_field('active_image_border_color') ) : ?>
            .section--team-members-v2 .team_slider_3 .slide .image-wrapper img {
                box-shadow: -10px 10px 0px 0px <?php echo the_sub_field('active_image_border_color'); ?>
            }
            .section--team-members-v2 .team_slider_4 .slide.slick-current img {
                box-shadow: -5px 5px 0px 0px <?php echo the_sub_field('active_image_border_color'); ?>
            }
        <?php endif; ?>
    </style>
</section>
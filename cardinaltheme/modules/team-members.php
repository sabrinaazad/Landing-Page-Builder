<section class="section section--team-members full-width" style="background-color:<?php the_sub_field('background_color'); ?>;" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
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
        <div class="team_slider_2">
            <?php if (have_rows('team_member')) : while (have_rows('team_member')) : the_row(); ?>
                <div class="slide">
                    <img src="<?php the_sub_field('image'); ?>" alt="team member" />
                </div>      
            <?php endwhile; else : endif; ?>
        </div>
        <div class="team_slider">
            <?php if (have_rows('team_member')) : while (have_rows('team_member')) : the_row(); ?>
                <div class="slide">
                    <div class="image-wrapper">
                        <img src="<?php the_sub_field('image'); ?>" alt="team member" />
                    </div>
                    <div class="content">
                        <div class="name"><?php the_sub_field("name"); ?></div>
                        <div class="title"><?php the_sub_field("title"); ?></div>
                        <div class="bio"><?php the_sub_field("bio"); ?></div>
                    </div>
                </div>      
            <?php endwhile; else : endif; ?>
        </div>
    </div>
    <style>
        .section--team-members .team_slider_2 .slide.slick-current img,
        .section--team-members .team_slider .slide .image-wrapper img  {
            border-color: <?php echo the_sub_field('image_border_color_active') ?>;
        }
        .section--team-members .team_slider_2 .slide img{
            border-color: <?php echo the_sub_field('image_border_color') ?>;
        }
        .section--team-members .team_slide .slide .name{
            color: <?php echo the_sub_field('name_color') ?>;
        }
        .section--team-members .team_slide .slide .title{
            color: <?php echo the_sub_field('title_color') ?>;
        }
        .section--team-members .team_slide .slide .bio{
            color: <?php echo the_sub_field('bio_color') ?>;
        }
    </style>
</section>
<section class="section section--team-members-v3" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">

        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <div class="subheading align--center" style="color: <?php the_sub_field('subheading_color'); ?>;"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading align--center" style="color: <?php the_sub_field('heading_color'); ?>;"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <div class="team_slider_6">
            <?php if (have_rows('team_member')) : while (have_rows('team_member')) : the_row(); ?>
                <div class="slide">
                    <div class="image-wrapper">
                        <img src="<?php the_sub_field('image'); ?>" alt="team member" />
                    </div>
                    <div class="content">
                        <div class="name"><?php the_sub_field("name"); ?></div>
                        <div class="title"><?php the_sub_field("title"); ?></div>
                    </div>
                    <div class="bio"><?php the_sub_field("bio"); ?></div>
                </div>      
            <?php endwhile; else : endif; ?>
        </div>

        <div class="team_slider_5">
            <?php if (have_rows('team_member')) : while (have_rows('team_member')) : the_row(); ?>
                <div class="slide">
                    <div class="image-wrapper">
                        <img src="<?php the_sub_field('image'); ?>" alt="team member" />
                    </div>
                    <div class="content">
                        <div class="name"><?php the_sub_field("name"); ?></div>
                        <div class="title"><?php the_sub_field("title"); ?></div>
                    </div>
                    <div class="bio"><?php the_sub_field("bio"); ?></div>
                </div>      
            <?php endwhile; else : endif; ?>
        </div>
    </div>
    <style>
        .section--team-members-v3 .team_slider_5 .slide .content,
        .section--team-members-v3 .team_slider_6 .slide .content {
            background-color: <?php echo the_sub_field('content_background_color') ?>;
        }
        .section--team-members-v3 .team_slider_5 .slide .name,
        .section--team-members-v3 .team_slider_6 .slide .name {
            color: <?php echo the_sub_field('name_color') ?>;
        }
        .section--team-members-v3 .team_slider_5 .slide .title,
        .section--team-members-v3 .team_slider_6 .slide .title {
            color: <?php echo the_sub_field('title_color') ?>;
        }
        .section--team-members-v3 .team_slider_5 .slide .bio,
        .section--team-members-v3 .team_slider_6 .slide .bio {
            color: <?php echo the_sub_field('bio_color') ?>;
        }
    </style>
</section>
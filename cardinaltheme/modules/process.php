<section class="section section--process full-width" id="<?php echo the_sub_field("id");?>" style="background-color:<?php echo the_sub_field("background_color");?>">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php if (get_sub_field('subheading')) : ?><div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php the_sub_field('subheading'); ?></div><?php endif; ?>
            <?php if (get_sub_field('heading')) : ?><h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php the_sub_field('heading'); ?></h2><?php endif; ?>
            <?php if (get_sub_field('blurb')) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field('blurb'); ?></div><?php endif; ?>
        </div>
       
        <?php if (have_rows('processes')) : ?>
            <div class="process-timeline">
                <?php while (have_rows('processes')) : the_row(); ?>
                    <div class="process">
                        <div class="image-wrapper">
                            <img src="<?php the_sub_field('image'); ?>">
                        </div>
                        <div class="text-wrapper">
                            <h3 style="color: <?php echo the_sub_field('title_color');?>"><?php the_sub_field('title'); ?></h3>
                            <div style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field('blurb'); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
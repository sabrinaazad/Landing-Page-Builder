<section class="section section--statistics stat full-width" style="background-color:<?php the_sub_field('background_color'); ?>;" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
        <?php if (get_sub_field("subheading")) : ?><div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
        <?php if (get_sub_field("heading")) : ?><h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
        <?php if (get_sub_field("blurb")) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field("blurb"); ?></div><?php endif; ?>
        <div class="panels countitup" id="counter">
            <?php if (have_rows('panels')) : $count=0; while (have_rows('panels')) : the_row(); ?>
                    <div id="counter<?php echo $count ?>" class="panel">
                    <?php if (get_sub_field('icon')) : ?><img class="icon" src="<?php the_sub_field('icon'); ?>" alt="icon" /><?php endif; ?>
                    <?php if (get_sub_field('number')) : ?><h3 class="number"><?php the_sub_field('number'); ?></h3><?php endif; ?>
                    <?php if (get_sub_field('title')) : ?><div class="title"><?php the_sub_field('title'); ?></div><?php endif; ?>
                    </div>
            <?php $count++; endwhile; else : endif; ?>
        </div>
    </div>
    <style> 
        .section--statistics .panels .panel .number {
            color: <?php echo the_sub_field('number_color'); ?>;
        }
        .section--statistics .panels .panel .title {
            color: <?php echo the_sub_field('title_color'); ?>;
            border-bottom: <?php echo the_sub_field('title_color'); ?>;
        }
    </style>
</section>
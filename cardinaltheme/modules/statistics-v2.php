<section class="section section--statistics-v2 stat full-width" style="background-color: <?php the_sub_field('background_color'); ?>">
    <div class="section-wrapper">
        <div class="panels countitup" id="counterv2">
            <?php if (have_rows('panels')) : $count=0; while (have_rows('panels')) : the_row(); ?>
                    <div id="counter<?php echo $count ?>" class="panel" style="background-color: <?php the_sub_field('background_color'); ?>">
                        <?php if (get_sub_field('icon')) : ?>
                        <div class="icon-wrapper">
                            <img class="icon" src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        </div>
                        <?php endif; ?>
                        <div class="stat-wrapper">
                        <?php if (get_sub_field('number')) : ?><h2 class="number" data-value="<?php the_sub_field('number'); ?>"><?php the_sub_field('number'); ?></h2><span class="percent">%</span><?php endif; ?>
                            <?php if (get_sub_field('title')) : ?><p class="title"><?php the_sub_field('title'); ?></p><?php endif; ?>
                        </div>
                    </div>
            <?php $count++; endwhile; else : endif; ?>
        </div>
    </div>
    <style>
       .section--statistics-v2 .panels .panel .stat-wrapper .number, .section--statistics-v2 .panels .panel .stat-wrapper .percent {
            color: <?php echo the_sub_field('number_color'); ?>;
        }
        .section--statistics-v2 .panels .panel .stat-wrapper .title {
            color: <?php echo the_sub_field('title_color'); ?>;
        }
    </style>
</section>

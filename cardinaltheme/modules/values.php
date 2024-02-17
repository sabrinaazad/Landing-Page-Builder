<section class="section section--values full-width no-padded-sides" style="background-color: <?php echo the_sub_field('values_bg'); ?>;" id="<?php echo the_sub_field("id") ?>">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                <div class="col">
                    <div class="section-wrapper">

                        <?php $subheading = get_sub_field('subheading');
                        if ($subheading) : ?>
                            <div class="subheading" style="color: <?php the_sub_field('subheading_color'); ?>;"><?php echo $subheading; ?></div>
                        <?php endif; ?>

                        <?php $heading = get_sub_field('heading');
                        if ($heading) : ?>
                            <h2 class="heading" style="color: <?php the_sub_field('heading_color'); ?>;"><?php echo $heading; ?></h2>
                        <?php endif; ?>

                        <?php if (have_rows('list')) : ?>
                            <ul class="list">
                                <?php while (have_rows('list')) : the_row(); ?>
                                    <li>
                                        <?php if (get_sub_field('icon')) : ?>
                                            <div class="icon">
                                                <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                                            </div>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('title')) : ?>
                                            <div class="title" style="color: <?php the_sub_field('title_color'); ?>;">
                                                <?php the_sub_field('title'); ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('text')) : ?>
                                            <div class="text" style="color: <?php the_sub_field('text_color'); ?>;">
                                                <?php the_sub_field('text'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                    </div>
                </div>
        <?php endwhile; else :  endif; ?>

        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                <div class="col">
                    <?php $image = get_sub_field('image');
                    if (($image)) : ?>
                        <div class="image-wrapper">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endif; ?>

                </div>
        <?php endwhile; else :  endif; ?>
    </div>
</section>
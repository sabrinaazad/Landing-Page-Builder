<section class="section section--gallery full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="content">
        <?php $subheading = get_sub_field('subheading');
        if( $subheading ): ?>
            <div class="subheading" style="color: <?php echo the_sub_field('subheading_color'); ?>"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if( $heading ): ?>
            <h2 class="heading" style="color: <?php echo the_sub_field('heading_color'); ?>"><?php echo $heading; ?></h2>
        <?php endif; ?>
        </div>
        <div class="gallery">
            <?php if (have_rows('images')) : while (have_rows('images')) : the_row(); ?>
                    <div class="image">
                        <img src="<?php the_sub_field('image'); ?>" alt="gallery image" />
                    </div>
            <?php endwhile; else :  endif; ?>
        </div>
    </div>
</section>
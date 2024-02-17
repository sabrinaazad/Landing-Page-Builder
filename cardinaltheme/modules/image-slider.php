<section class="section section--image-slider full-width no-padded-sides" style="background-color:<?php the_sub_field('background_color'); ?>;" id="<?php echo the_sub_field("id") ?>">
 
        <div class="content-wrapper align--center">

            <?php $subheading = get_sub_field('subheading');
                if( $subheading ): ?>
                    <h4 class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></h4>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
                if( $heading ): ?>
                    <h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h2>
            <?php endif; ?>
           
            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
            <?php endif; ?>

        </div>
        <div class="image_slider">
        <?php if (have_rows('images')) : while (have_rows('images')) : the_row(); ?>
                <div class="slider">
                    <img class="image" src="<?php echo the_sub_field('image'); ?>">
                </div>
        <?php endwhile; else : endif; ?>
        </div>

</section>

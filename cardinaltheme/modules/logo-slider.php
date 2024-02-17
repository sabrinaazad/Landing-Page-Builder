<section class="section section--logo-slider full-width" style="background-color: <?php echo the_sub_field('bg_color'); ?>;" id="<?php echo the_sub_field('id'); ?>">
<?php if( have_rows('logo_slider') ): ?>
    <div class="logo_slider">
        <?php while( have_rows('logo_slider') ) : the_row(); ?> 
    
            <?php $image = get_sub_field('image'); ?>
            <div class="slide"><img src="<?php echo $image ?>" alt="slide logo" /></div>

        <?php  endwhile; ?>
    </div>
<?php else : endif; ?>
</section>
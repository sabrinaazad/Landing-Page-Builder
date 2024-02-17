<section class="section section--hero-v4 full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id'); ?>">
	<div class="section-wrapper">
        <div class="content-wrapper">

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h1 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h1>
            <?php endif; ?>
          
        </div>
    </div>
</section>
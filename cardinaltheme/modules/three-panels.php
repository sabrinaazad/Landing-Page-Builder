<section class="section section--three-panels full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>)" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="two-col">
            <div class="col">

                <?php $subheading = get_sub_field('subheading');
                if( $subheading ): ?>
                    <span class="subheading uppercase" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></span>
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
            <div class="col">
                <div class="panels">
                <?php  if( have_rows('panels') ): while( have_rows('panels') ) : the_row(); ?>
                    <div class="panel">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <h4 style="color: <?php echo the_sub_field('title_color');?>"><?php the_sub_field('title'); ?></h4>
                        <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field('blurb'); ?></div>
                    </div>
                <?php endwhile;  else :  endif; ?>
                </div>    
            </div>
        </div>
    </div>
    <style>
        .section--three-panels .two-col .col:nth-child(2) .panel {
            border-color: <?php echo the_sub_field('panel_border_color'); ?>
        }
    </style>
</section>
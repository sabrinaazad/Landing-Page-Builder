<section class="section section--two-column-list full-width" style="background-color:<?php the_sub_field('background_color'); ?>;" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper">
            <?php $subheading = get_sub_field('subheading');
                if( $subheading ): ?>
                    <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
            <?php endif; ?>
            
            <?php $heading = get_sub_field('heading');
                if( $heading ): ?>
                    <h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
                if ($blurb) : ?>
                    <p style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></p>
            <?php endif; ?>
        </div>
        <ul class="list">
            <?php if (have_rows('list')) : $count=0; while (have_rows('list')) : the_row(); ?>
                <li>
                    <div class="icon-wrapper">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon">
                    </div>
                    <div class="text-wrapper">
                    <div class="title" style="color: <?php echo the_sub_field('title_color');?>"><?php the_sub_field('title'); ?></div>
                    <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field('blurb'); ?></div>
                    </div>
                </li>  
            <?php $count++; endwhile; else : endif; ?>
        </ul>
    </div>
</section>
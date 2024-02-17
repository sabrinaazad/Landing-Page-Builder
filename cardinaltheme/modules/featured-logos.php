<section class="section section--featured-logos full-width" 
<?php 
    if( get_sub_field('background_image_or_color') == 'Background Image' ) { ?>
        style="background-image:url(<?php echo the_sub_field('background_image'); ?>);"
<?php 
    } elseif (get_sub_field('background_image_or_color') == 'Background Color' ) { ?>
        style="background-color:<?php echo the_sub_field('background_color'); ?>;"
<?php } ?> 
id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper">
            <?php if (get_sub_field("subheading")) : ?><div class="subheading" style="color: <?php echo the_sub_field('subheading_color'); ?>"><?php echo the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h2 class="heading" style="color: <?php echo the_sub_field('heading_color'); ?>"><?php echo the_sub_field("heading"); ?></h2><?php endif; ?>
            <?php if (get_sub_field("blurb")) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color'); ?>"><?php echo the_sub_field("blurb"); ?></div><?php endif; ?>
        </div>
            <div class="logos-wrapper">
                <?php if (have_rows('logos')) : $count=0; while (have_rows('logos')) : the_row(); ?>
                    <div class="logo-wrapper">
                        <img class="logo" src="<?php echo the_sub_field('logo'); ?>" alt="logo" /> 
                    </div>
                <?php $count++; endwhile; else : endif; ?>
            </div>
            <div class="footnote" style="color: <?php echo the_sub_field('footnote_color')?>">
                <?php echo the_sub_field('footnote'); ?>
            </div>
        </div>
    </div>
</section>
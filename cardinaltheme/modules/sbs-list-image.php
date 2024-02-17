<?php
if (get_sub_field('alt')) {
    $alt = "alt";
} else {
    $alt = "";
}
if (get_sub_field('reverse')) {
    $reverse = "reverse";
} else {
    $reverse = "";
}
?>
<section class="section section--sbs-list-image full-width no-padded-sides <?php echo $alt; ?> <?php echo $reverse; ?>" 
<?php 
    if( get_sub_field('background_image_or_color') == 'Background Image' ) { ?>
        style="background-image:url(<?php echo the_sub_field('background_image'); ?>);"
<?php 
    } elseif (get_sub_field('background_image_or_color') == 'Background Color' ) { ?>
        style="background-color:<?php echo the_sub_field('background_color'); ?>;"
<?php } ?> 
id="<?php echo the_sub_field('id'); ?>">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                <div class="section-wrapper">

                    <?php if (get_sub_field("subheading")) : ?><div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
                    <?php if (get_sub_field("heading")) : ?><h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
                    <?php if (get_sub_field("blurb")) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field("blurb"); ?></div><?php endif; ?>
                    
                    <ul class="list">
                        <?php if (have_rows('list')) : $count=0; while (have_rows('list')) : the_row(); ?>
                            <li><?php the_sub_field('list_item'); ?></li>  
                        <?php $count++; endwhile; else : endif; ?>
                    </ul>
                    
                </div>   
            </div>  
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>  
            <div class="col">
                <div class="image-wrapper" style="background-image: url(<?php the_sub_field('image'); ?>)"></div>
            </div>           
        <?php endwhile; else :  endif; ?>
        
    </div>
    <style>
        .section--sbs-list-image .two-col .col .list li {
            color: <?php echo the_sub_field('list_item_color');?>;
        }
        .section--sbs-list-image .two-col .col .list li::after {
            background-image: url(<?php echo the_sub_field('list_item_icon') ?>);
        }
    </style>
</section>
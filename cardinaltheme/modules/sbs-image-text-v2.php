<?php
if (get_sub_field('reverse')) {
    $reverse = "reverse";
} else {
    $reverse = "";
}
if (get_sub_field('out_of_bound')) {
    $outofbound = "out-of-bound";
} else {
    $outofbound = "";
}
?>
<section class="section section--sbs-image-text-v2 full-width <?php echo $reverse; ?> <?php echo $outofbound; ?>" 
<?php 
    if( get_sub_field('background_image_or_color') == 'Background Image' ) { ?>
        style="background-image:url(<?php echo the_sub_field('background_image'); ?>;"
<?php 
    } elseif (get_sub_field('background_image_or_color') == 'Background Color' ) { ?>
        style="background-color:<?php echo the_sub_field('background_color'); ?>;"
<?php } ?> 
id="<?php echo the_sub_field('id'); ?>">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
            <?php $featuredimage = get_sub_field('image');
                if ($featuredimage) : ?>
                    <div class="featured-image-wrapper">
                        <img src="<?php echo esc_url($featuredimage['url']); ?>" alt="<?php echo esc_attr($featuredimage['alt']); ?>" class="image" />
                    </div>
                <?php endif; ?>
            </div>         
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
            <div class="col">
                <div class="section-wrapper">

                    <?php if (get_sub_field("subheading")) : ?><div class="subheading" style="color: <?php echo the_sub_field('heading_color');?>"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
                    <?php if (get_sub_field("heading")) : ?><h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php the_sub_field("heading"); ?></h2><?php endif; ?>

                        <?php $blurb = get_sub_field('blurb');
                        if ($blurb) : ?>
                            <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
                    <?php endif; ?>

                    <?php
                    $button1 = false;
                    $button2 = false;
                    if ( !empty(get_sub_field('button1')) ){
                        $button1 = get_sub_field('button1');
                        $link1_url = $button1['url'];
                        $link1_title = $button1['title'];
                        $link1_target = $button1['target'] ? $button1['target'] : '_self';
                    }
                    if ( !empty(get_sub_field('button2')) ){
                        $button2 = get_sub_field('button2');
                        $link2_url = $button2['url'];
                        $link2_title = $button2['title'];
                        $link2_target = $button2['target'] ? $button2['target'] : '_self';
                    }
                ?>

                    <div class="button-wrapper">
                        <?php if ($button1) : ?>
                            <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo $link1_url ?>" target="<?php echo $link1_target ?>"><?php echo $link1_title ?></a>
                        <?php endif; ?>

                        <?php if ($button2) : ?>
                            <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_bg_color2');?>; color: <?php echo the_sub_field('button_color2');?>;" href="<?php echo $link2_url ?>" target="<?php echo $link2_target ?>"><?php echo $link2_title ?></a>
                        <?php endif; ?>
                    </div>
                    
                </div>   
        </div>         
        <?php endwhile; else :  endif; ?>
    </div>
</section>

<?php
if (get_sub_field('white_text')) {
    $white = "white";
} else {
    $white = "";
}
?>
<section class="section section--four-panels full-width" style="background-color:<?php echo the_sub_field('background_color'); ?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <div class="content">
        <?php $subheading = get_sub_field('subheading');
        if( $subheading ): ?>
            <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if( $heading ): ?>
            <h2 class="heading border-bottom" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
        <?php endif; ?>
        </div>
        <div class="panels four_panels_slider">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                    <div class="panel <?php echo $white ?>">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <h4 class="border-bottom" style="color: <?php echo the_sub_field('title_color');?>"><?php the_sub_field('title'); ?></h4>
                        <div style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field('blurb'); ?></div>
                    </div>
            <?php endwhile;
            else :  endif; ?>
        </div>
    </div>
    <style>
        .section--four-panels .panels .panel {
            background-color: <?php echo the_sub_field('panel_bg_color')?>;
            border-color: <?php echo the_sub_field('panel_border_color')?>;
        }
    </style>
</section>
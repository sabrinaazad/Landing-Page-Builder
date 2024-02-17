<?php
if (get_sub_field('white_text')) {
    $whiteText = "white-text";
} else {
    $whiteText = "";
}
?>
<section class="section section--three-panels-v2 full-width" style="background-image:url(<?php echo the_sub_field('background_image'); ?>;" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <div class="subheading align--center" style="color: <?php the_sub_field('subheading_color'); ?>;"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading align--center" style="color: <?php the_sub_field('heading_color'); ?>;"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
        if ($blurb) : ?>
            <div class="blurb align--center" style="color: <?php echo the_sub_field('blurb_color'); ?>"><?php echo $blurb; ?></div>
        <?php endif; ?>

        <div class="panels">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                    <div class="panel" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <h4 class="title <?php echo $whiteText; ?>" style="color: <?php echo the_sub_field('title_color'); ?>"><?php the_sub_field('title'); ?></h4>
                        <div class="blurb <?php echo $whiteText; ?>" style="color: <?php echo the_sub_field('blurb_color'); ?>"><?php the_sub_field('blurb'); ?></div>
                    </div>
            <?php endwhile;
            else :  endif; ?>
        </div>
    </div>
    <style>
        .section--three-panels-v2 .panels .panel {
            border-color: <?php echo the_sub_field('panel_border_color'); ?>;
            background-color: <?php echo the_sub_field('panel_background_color'); ?>;
        }
    </style>
</section>
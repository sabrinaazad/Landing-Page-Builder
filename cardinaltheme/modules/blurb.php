<div class="section section--blurb align--center" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading" style="color: <?php echo the_sub_field('heading_color'); ?>"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
        <?php endif; ?>

    </div>
</div>
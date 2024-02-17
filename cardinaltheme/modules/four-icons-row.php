<?php
if (get_sub_field('lines')) {
    $lines = "lines";
} else {
    $lines = "";
}
?>
<section class="section section--four-icons-row full-width" style="background-color:<?echo the_sub_field("background_color"); ?> ;" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php if (get_sub_field("subheading")) : ?><div style="color: <?php the_sub_field('subheading_color'); ?>;" class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h2 style="color: <?php the_sub_field('heading_color'); ?>;" class="heading"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb" style="color: <?php the_sub_field('blurb_color'); ?>;" ><?php echo $blurb; ?></div>
            <?php endif; ?>
        </div>
        <div class="icons-wrapper <?php echo $lines; ?>">
            <?php if (have_rows('icons')) : while (have_rows('icons')) : the_row(); ?>
                <div class="content">
                    <img class="icon" src="<?php echo the_sub_field('icon'); ?>">
                    <div class="title" style="color: <?php the_sub_field('title_color'); ?>;" ><?php echo the_sub_field('title'); ?></div>
                    <div class="blurb" style="color: <?php echo the_sub_field("blurb_color") ?>;"><?php echo the_sub_field('blurb'); ?></div>
                </div>
            <?php endwhile; else : endif; ?>
        </div>
    </div>
    <style>
        .section--four-icons-row .icons-wrapper.lines .content .title::after {
            background-color:  <?php the_sub_field('line_color'); ?>;
        }
    </style>
</section>
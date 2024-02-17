<section class="section section--logo-grid no-padded-top" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
        <div class="grid">
            <?php  if( have_rows('grid') ): while( have_rows('grid') ) : the_row(); ?>
            <div class="grid-item">
                <?php $image = get_sub_field('image'); ?>
                <?php $title = get_sub_field('title'); ?>
                <div class="image-wrapper">
                    <img src="<?php echo $image ?>" alt="logo" />
                </div>
                    <div class="title"><?php echo $title ?></div>
            </div>
            <?php endwhile;  else :  endif; ?>
        </div>
    </div>
    <style>
        .section--logo-grid .grid .grid-item .image-wrapper {
            border-color: <?php echo the_sub_field('border_color') ?>;
        }
    </style>
</section>
<section class="section section--cards" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php if (get_sub_field("subheading")) : ?>
                <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo the_sub_field("subheading"); ?></div>
            <?php endif; ?>
            <?php if (get_sub_field("heading")) : ?>
                <h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo the_sub_field("heading"); ?></h2>
            <?php endif; ?>
            <?php if (get_sub_field("blurb")) : ?>
                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo the_sub_field("blurb"); ?></div>
            <?php endif; ?>
        </div>

            <div class="cards_slider">
                <?php if (have_rows('cards')) : $count=0; while (have_rows('cards')) : the_row(); ?>
                    <div class="card">
                        <?php if (get_sub_field("title")) : ?><div class="title" style="color: <?php echo the_sub_field('title_color');?>"><?php echo the_sub_field('title'); ?></div><?php endif; ?>
                        <?php if (get_sub_field("blurb")) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo the_sub_field('blurb'); ?></div><?php endif; ?>
                        <?php $button = get_sub_field('button');
                        if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <div class="button-wrapper">
                            <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_background_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php $count++; endwhile; else : endif; ?>
            </div>
        </div>
    </div>
    <style>
        .section--cards .cards_slider .card {
            border-color: <?php echo the_sub_field('card_border_color'); ?>
        }
    </style>
</section>
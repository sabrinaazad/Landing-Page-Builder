<section class="section section--sbs-info-services" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="two-col">

            <div class="col">
                <div class="image-wrapper">
                    <img src="<?php the_sub_field('image'); ?>" alt="feature image">
                </div>
                <?php if (get_sub_field("heading")) : ?><h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php the_sub_field("heading")?></h2><?php endif; ?>
                <?php if (get_sub_field("blurb")) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php the_sub_field("blurb"); ?></div><?php endif; ?>
                <div class="button-wrapper">
                    <?php $button = get_sub_field('button');
                    if ($button) :
                        $button_url = $button['url'];
                        $button_title = $button['title'];
                        $button_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>; border-color: <?php echo the_sub_field('button_bg_color');?>;" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                    <?php endif; ?>
                </div>
                <div class="map-wrapper">
                    <iframe src="<?php echo the_sub_field("map") ?>" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <?php if (get_sub_field("heading2")) : ?><h3 style="color: <?php echo the_sub_field('heading_color2');?>"><?php the_sub_field("heading2")?></h3><?php endif; ?>
                <?php if (get_sub_field("blurb2")) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color2');?>"><?php the_sub_field("blurb2"); ?></div><?php endif; ?>
            </div>           
        
            <div class="col">
                <?php if (get_sub_field("heading3")) : ?><h2 class="heading" style="color: <?php echo the_sub_field('heading_color3');?>"><?php the_sub_field("heading3")?></h2><?php endif; ?>
                <?php if (get_sub_field("blurb3")) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color3');?>"><?php the_sub_field("blurb3"); ?></div><?php endif; ?>
                <?php if (have_rows('service_boxes')) : ?> 
                    <div class="service_boxes_slider">
                    <?php while (have_rows('service_boxes')) : the_row(); ?>
                    <div class="box">
                        <div class="icon"><img src="<?php the_sub_field("icon") ?>" /></div>
                        <h4 class="title" style="color: <?php echo the_sub_field('title_color');?>"><?php the_sub_field("title") ?></h4>
                    </div>           
                <?php endwhile; ?> 
                </div>
                <?php endif; ?>
            </div> 

        </div>
    </div>
</section>
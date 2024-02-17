<section class="section section--hero-v3 full-width no-padded-sides no-padded-top no-padded-bottom" id="<?php echo the_sub_field('id'); ?>">
    <div class="content-top-background" style="background-image: url(<?php the_sub_field('top_content_background_image'); ?>);">
        <div class="section-wrapper">
            <div class="content-top">
            <?php if( have_rows('top_content') ):

                while( have_rows('top_content') ): the_row();

                    $subheading = get_sub_field('subheading');
                    if ($subheading) : ?>
                        <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
                    <?php endif; ?>
            
                    <?php $heading = get_sub_field('heading');
                    if ($heading) : ?>
                        <h1 class="heading" style="color: <?php the_sub_field('heading_color'); ?>"><?php echo $heading; ?></h1>
                    <?php endif; ?>
            
                    <?php $blurb = get_sub_field('blurb');
                        if ($blurb) : ?>
                            <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
                    <?php endif; ?>
                        
                    <?php $button = get_sub_field('button');
                    if( $button ): 
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                        <a class="btn btn-secondary" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

                    <?php endif; 
                    
                endwhile; 

            endif; ?>
            </div>
        </div>
    </div>
    
    <div class="content-bottom">
        <div class="section-wrapper">
        <?php if( have_rows('bottom_content') ):

        while( have_rows('bottom_content') ): the_row(); ?>
            
            <div class="two-col">
                <div class="col">
                    <?php $image = get_sub_field('image');
                          $embed = get_sub_field('oembed'); 
                          $image_or_video = get_sub_field('image_or_video');

                        if($image_or_video == 'Image') { ?>
                        <div class="image-wrapper">
                            <img src="<?php echo $image; ?>" alt="featured image" />
                        </div>
                    <?php } else if ($image_or_video == 'Video') { ?>
                        <div class="video-wrapper">
                            <?php echo $embed; ?>
                        </div> 
                    <?php } ?>
                </div>
                <div class="col">
                <?php $subheading = get_sub_field('subheading');
                if ($subheading) : ?>
                    <div class="subheading" style="color: <?php echo the_sub_field('subheading_color');?>"><?php echo $subheading; ?></div>
                <?php endif; ?>
            
                <?php $heading = get_sub_field('heading');
                if ($heading) : ?>
                    <h1 class="heading" style="color: <?php the_sub_field('heading_color'); ?>"><?php echo $heading; ?></h1>
                <?php endif; ?>
            
                <?php $blurb = get_sub_field('blurb');
                    if ($blurb) : ?>
                        <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
                <?php endif; ?>
                <?php 
                $button = get_sub_field('button');
                if( $button ): 
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                ?>
                    <a class="btn btn-secondary" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>; " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
                </div>
            </div>
        
        <?php endwhile; 

        endif; ?>
        </div>
    </div>
</section>
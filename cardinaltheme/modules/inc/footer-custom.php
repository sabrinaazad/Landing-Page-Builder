<footer class="footer full-width" id="footer" style="background-color: <?php echo the_field('footer_bg_color'); ?>; color: <?php echo the_field('footer_color'); ?>;">
    <section class="section section--footer">
        <?php if (get_field('footer_logo')) : ?>
        <div class="logo-container">
            <img src="<?php echo the_field('footer_logo'); ?>" alt="Logo" class="logo">
        </div>
        <?php endif; ?>
        <?php if (get_field('details_block')) : ?>
        <div class="detail-container">
           <p><?php echo the_field('details_block'); ?></p>
        </div>
        <?php endif; ?>
        <?php if( have_rows('footer_icons') ): ?>
            <div class="icons-container">
                <?php while( have_rows('footer_icons') ) : the_row();
                    $link = get_sub_field('link');
                    $icon = get_sub_field('icon');
                    $alt = get_sub_field('alt'); ?>
                    <a class="icon" href="<?php echo $link ?>" target="_blank">
                        <img src="<?php echo $icon?>" alt="<?php echo $alt?>" />
                    </a>
                <?php endwhile; ?>
            </div>
        <?php else : endif;?>
        <?php if( have_rows('menu') ): ?>
            <div class="menu-container">
                <ul class="footer-nav" id="footerNav">
                <?php while( have_rows('menu') ) : the_row();
                $link = get_sub_field('menu_item');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></li>
                <?php endif; endwhile; ?>
                </ul> 
            </div>
        <?php else : endif;?>
        <?php if (get_field('info_block')) : ?>
        <div class="info-container">
            <p><?php echo the_field('info_block'); ?>
                <br>Website Design, Development & SEO by <a target="_blank" href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
            </p>
        </div>
        <?php endif; ?>
        <style>
            .footer {
                background-color: <?php echo the_field('footer_bg_color'); ?>;
                color: <?php echo the_field('footer_color'); ?>;
            }
            .footer a {
                color: <?php echo the_field('footer_color'); ?>;
            }
        </style>
    </section>
    <div class="sticky-buttons mobile-only">
        <div class="button-wrapper">
            <a href="<?php echo get_field('button_one_link')?>" style="background-color:<?php echo get_field('button_one_bg_color')?>; color:<?php echo get_field('button_one_color')?>;"><?php echo get_field('button_one_label')?></a>
            <a href="<?php echo get_field('button_two_link')?>" style="background-color:<?php echo get_field('button_two_bg_color')?>; color:<?php echo get_field('button_two_color')?>;"><?php echo get_field('button_two_label')?></a>
        </div>
    </div>
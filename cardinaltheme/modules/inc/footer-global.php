<footer class="footer full-width" id="footer" style="background-color: <?php echo the_sub_field('footer_bg'); ?>">
    <section class="section section--footer">
        <div class="logo-container">
            <img src="<?php echo the_field('footer_logo', 'options'); ?>" alt="Logo" class="logo">
        </div>
        <div class="details-container">
            <p><?php echo the_field('details_block', 'options'); ?></p>
        </div>
        <?php if( have_rows('footer_icons', 'options') ): ?>
            <div class="icons-container">
                <?php while( have_rows('footer_icons', 'options') ) : the_row();
                    $link = get_sub_field('link');
                    $icon = get_sub_field('icon');
                    $alt = get_sub_field('alt'); ?>
                    <a class="icon" href="<?php echo $link ?>" target="_blank">
                        <img src="<?php echo $icon?>" alt="<?php echo $alt?>" />
                    </a>
                <?php endwhile; ?>
            </div>
        <?php else : endif;?>
        <div class="menu-container">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-nav',
                'container' => '',
                'items_wrap' => '
                    <ul class="footer-nav">
                        %3$s
                    </ul>
                    ',
                'menu_id' => 'footerNav'
            )); ?>
        </div>
        <div class="info-container">
            <p><?php echo the_field('info_block', 'options'); ?>
                <br>Website Design, Development & SEO by <a target="_blank" href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
            </p>
        </div>
    </section>
    <div class="sticky-buttons mobile-only">
        <div class="button-wrapper">
            <a href="<?php echo the_field('button_one_url', 'options'); ?>"><?php echo the_field('button_one_label', 'options'); ?></a> 
            <a href="<?php echo the_field('button_two_url', 'options'); ?>"><?php echo the_field('button_two_label', 'options'); ?></a> 
        </div>
    </div>
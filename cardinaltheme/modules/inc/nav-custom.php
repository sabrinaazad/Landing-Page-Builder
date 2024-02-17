<?php 
    if( get_field('round_or_square') == 'Round' ) { ?>
      <style>
        .btn {
            border-radius: 1em;
        }
      </style> 
<?php 
    } elseif (get_field('round_or_square') == 'Square' ) { ?>
       <style>
        .btn {
            border-radius: 0.25em;
        }
      </style> 
<?php } ?> 
<?php if(get_field("topbar_background_color")) :?>
    <div class="topbar desktop-only" style="background-color: <?php the_field("topbar_background_color")?>">
        <div class="content">
            <div class="left">
                <?php if ( get_field('topbar_phone') ) : ?>
                    <div class="top-nav__phone">
                        <a href="tel:<?php echo the_field('topbar_phone'); ?>"><?php echo the_field('topbar_phone'); ?></a>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('topbar_message') ) : ?>
                    <div class="top-nav__message">
                        <?php echo the_field('topbar_message'); ?>
                    </div>
                <?php endif; ?>
                <?php if( have_rows('icons') ): ?>
                    <div class="top-nav__icons">
                        <?php while( have_rows('icons') ) : the_row();
                            $link = get_sub_field('link');
                            $icon = get_sub_field('icon');
                            $alt = get_sub_field('alt'); ?>
                            <a class="icon" href="<?php echo $link ?>" target="_blank">
                                <img src="<?php echo $icon?>" alt="<?php echo $alt?>" />
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php else : endif;?>
            </div>
            <div class="right">
                <div class="top-nav__drawer">
                <?php if( have_rows('top_menu') ): ?>
                    <div class="top-nav__container">
                        <ul class="top-nav">
                        <?php while( have_rows('top_menu') ) : the_row();
                            $link = get_sub_field('menu_link');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <li class="menu-item">
                                <a style="color:<?php the_sub_field('top_nav_color'); ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            </li>
                            <?php endif; endwhile; ?>
                        </ul>
                    </div>
                <?php else : endif;?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<nav class="main-nav full-width" id="mainNav">
    <div class="sticky-wrapper">
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <div class="logo">
                    <img src="<?php echo the_field('logo_src');?>" />
                </div>
            </div>

            <div class="phone mobile-only">
                <a href="tel:<?php echo the_field('phone'); ?>"><img src="/wp-content/themes/cardinaltheme/assets/icon-phone.png" alt="phone icon"/></a>
            </div>

            <div class="main-nav__bar mobile-only">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <?php $barcolor = get_field('mobile_bar_color'); ?>
                    <div class="hamburger-button__bar--top" style="background-color: <?php echo $barcolor ?>;"></div>
                    <div class="hamburger-button__bar--middle" style="background-color: <?php echo $barcolor ?>;"></div>
                    <div class="hamburger-button__bar--bottom" style="background-color: <?php echo $barcolor ?>;"></div>
                </button>
            </div>

            <div class="main-nav__drawer">
            <?php if( have_rows('main_menu') ): ?>
                    <div class="primary-nav__container">
                        <ul class="primary-nav">
                        <?php while( have_rows('main_menu') ) : the_row();
                        $navColor = get_sub_field('nav_color'); 
                        $button = get_sub_field('button'); 
                        $buttonBG = get_sub_field('button_bg_color');  
                        $link = get_sub_field('menu_link');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            if( $button ) {
                                $button = "btn";
                            } else {
                                $button = "";
                            }
                        ?>
                        <li class="menu-item <?php echo $button ?>" style="background-color: <?php echo $buttonBG ?>;">
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" style="color: <?php echo $navColor ?>;"><?php echo esc_html($link_title); ?></a>
                        </li>
                        <?php endif; endwhile; ?>
                        </ul>
                    </div>
                <?php else : endif;?>
            </div>

        </div>
    </div>
    <style>
        .main-nav .main-nav__wrapper .main-nav__drawer .primary-nav,
        .main-nav .sticky-wrapper {
            background-color: <?php echo the_field('nav_bg_color'); ?>;
        }
        .topbar, 
        .topbar .top-nav__phone a, 
        .top-nav li a {
            color: <?php echo the_field('topbar_color'); ?>
        }
    </style>
</nav>

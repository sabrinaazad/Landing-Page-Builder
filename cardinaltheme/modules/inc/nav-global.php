<?php 
    if( get_field('round_or_square', 'options') == 'Round' ) { ?>
      <style>
        .btn {
            border-radius: 1em;
        }
      </style> 
<?php 
    } elseif (get_field('round_or_square', 'options') == 'Square' ) { ?>
       <style>
        .btn {
            border-radius: 0.25em;
        }
      </style> 
<?php } ?> 
<div class="topbar desktop-only" style="background-color: <?php the_field("topbar_background_color", "option")?>;">
    <div class="content">
        <div class="left">
            <?php if ( get_field('phone', 'options') ) : ?>
                <div class="top-nav__phone">
                    <a href="tel:<?php echo the_field('phone', 'options'); ?>"><?php echo the_field('phone', 'options'); ?></a>
                </div>
            <?php endif; ?>
            <?php if ( get_field('message', 'options') ) : ?>
                    <div class="top-nav__message">
                       <?php echo the_field('message', 'options'); ?>
                    </div>
                <?php endif; ?>
            <?php if( have_rows('icons', 'options') ): ?>
                <div class="top-nav__icons">
                    <?php while( have_rows('icons', 'options') ) : the_row();
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
                <?php wp_nav_menu(array(
                    'theme_location' => 'top-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="top-nav__container">
                        <ul class="top-nav">
                            %3$s
                        </ul></div>'
                ));
                ?>
            </div>
        </div>
    </div>
</div>

<nav class="main-nav full-width" id="mainNav">
    <div class="sticky-wrapper">
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <div class="logo">
                    <img src="<?php echo the_field('logo_src', 'options');?>" />
                </div>
            </div>


            <div class="phone mobile-only">
                <a href="tel:<?php echo the_field('phone', 'options'); ?>"><img src="/wp-content/themes/cardinaltheme/assets/icon-phone.png" alt="phone icon"/></a>
            </div>

            <div class="main-nav__bar mobile-only">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="main-nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav">
                            %3$s
                        </ul></div>'
                ));
                ?>

            </div>

        </div>
    </div>
</nav>

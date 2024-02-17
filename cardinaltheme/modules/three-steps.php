<section class="section section--three-steps full-width" style="background-color: <?php echo the_sub_field('bg_color');?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        
        <div class="heading-wrapper">

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading" style="color: <?php echo the_sub_field('heading_color');?>"><?php echo $heading; ?></h2>
            <?php endif; ?>
            
            <div class="button-wrapper desktop-only">
                <?php $button = get_sub_field('button');
                if ($button) :
                    $button_url = $button['url'];
                    $button_title = $button['title'];
                    $button_target = $button['target'] ? $button['target'] : '_self';
                ?>
                <div class="content-wrapper">
                    <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>;" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                </div>
                <?php endif; ?>
            </div>

        </div>

        <?php if (have_rows('steps')) : ?>
            <div class="steps-wrapper">
                <?php while (have_rows('steps')) : the_row(); ?>
                    <?php 
                        $number = get_sub_field('number');
                        $text = get_sub_field('text');
                    ?>
                    <div class="step">
                        <div class="number" style="color: <?php echo the_sub_field('number_color');?>"><?php echo $number ?></div>
                        <div class="text" style="color: <?php echo the_sub_field('text_color');?>"><?php echo $text ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : endif; ?>

        <div class="button-wrapper mobile-only">
            <div class="content-wrapper">
                <a class="btn btn-primary" style="background-color: <?php echo the_sub_field('button_bg_color');?>; color: <?php echo the_sub_field('button_color');?>;  border-color: <?php echo the_sub_field('button_bg_color');?>;" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
            </div>
        </div>

    </div>
    <style>
        <?php if (get_sub_field('shadow_color')) : ?>
        .section--three-steps .heading-wrapper .heading::after {
            background-image: linear-gradient(to left, <?php echo the_sub_field('shadow_color');?>, rgba(255, 255, 255, 0));
        }
        <?php endif; ?>
    </style>
</section>
<section class="section section--faqs" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center" style="background-color: <?php the_sub_field('top_background_color'); ?>;">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <div class="subheading" style="color: <?php the_sub_field('subheading_color'); ?>;"><?php echo $subheading; ?></div>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading" style="color: <?php the_sub_field('heading_color'); ?>;"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb" style="color: <?php echo the_sub_field('blurb_color');?>"><?php echo $blurb; ?></div>
            <?php endif; ?>
        </div>
       
        <?php if (have_rows('faq')) : ?>
            <div class="faq-wrapper">  
                <?php while (have_rows('faq')) : the_row(); ?>
                    <div class="faq">
                        <div class="question" style="color: <?php the_sub_field('question_color'); ?>;">
                            <div class="arrow-down"></div>
                            <?php the_sub_field("question") ?>
                        </div>
                        <div class="answer" style="color: <?php the_sub_field('answer_color'); ?>;"><?php the_sub_field("answer") ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : endif; ?>
    </div>
    <style>
        .section--faqs .faq-wrapper {
            background-color: <?php the_sub_field('faq_background_color'); ?>;
        }
        .section--faqs .faq-wrapper .faq .arrow-down {
            color: <?php echo the_sub_field('arrow_color'); ?>;
        }
    </style>
</section>
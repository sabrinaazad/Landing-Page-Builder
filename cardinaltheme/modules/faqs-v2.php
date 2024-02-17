<section class="section section--faqs-v2" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center">
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

        <div class="faq-wrapper" style="background-color: <?php echo the_sub_field('faq_background_color'); ?>;">
            <?php if (have_rows('faq')) : ?>
                <?php while (have_rows('faq')) : the_row(); ?>
                    <div class="faq">
                        <h4 class="question">
                            <button id="button">
                                <span></span>
                                <span></span>
                            </button>
                            <?php the_sub_field("question") ?>
                        </h4>
                        <div class="answer"><?php the_sub_field("answer") ?></div>
                    </div>
                <?php endwhile; ?>
            <?php else : endif; ?>
        </div>
        
        <style>
        .section--faqs-v2 .faq-wrapper .faq .question {
            color: <?php echo the_sub_field('question_color');?>;
        }
        .section--faqs-v2 .faq-wrapper .faq .answer {
            color: <?php echo the_sub_field('answer_color');?>;
        }
        .section--faqs-v2 .faq-wrapper .faq .question #button {
            color: <?php echo the_sub_field('plus_color'); ?>
        }
        .section--faqs-v2 .faq-wrapper .faq .question #button span {
            background-color: <?php echo the_sub_field ('plus_color'); ?>
        }
    </style>

    </div>
</section>
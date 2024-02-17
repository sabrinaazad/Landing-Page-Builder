<section class="section section--faqs-v3" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="faq-wrapper">
            <?php if( have_rows('faq') ): while( have_rows('faq') ) : the_row(); ?>
                <div class="faq">
                    <h2 class="question heading" style="color: <?php the_sub_field('question_color'); ?>;">
                        <?php the_sub_field("question") ?>
                        <button id="button">
                            <span></span>
                            <span></span>
                        </button>
                    </h2>
                    <div class="answer" style="color: <?php the_sub_field('answer_color'); ?>;"><?php the_sub_field("answer") ?></div>
                </div>
            <?php endwhile; else : endif;?>    
        </div>
    </div>
    <style>
        .section--faqs-v3 .faq-wrapper .faq .question #button {
            color: <?php echo the_sub_field('plus_background_color'); ?>
        }

        .section--faqs-v3 .faq-wrapper .faq .question #button span {
            background-color: <?php echo the_sub_field ('plus_color'); ?>
        }

        .section--faqs-v3 .faq-wrapper, 
        .section--faqs-v3 .faq-wrapper .faq {
            border-color: <?php echo the_sub_field('border_color_faq'); ?>;
        }
    </style>
</section>
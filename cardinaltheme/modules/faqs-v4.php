<section class="section section--faqs-v4" id="<?php echo the_sub_field('id') ?>">
    <div class="section-wrapper">
    <div class="heading-wrapper">
        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <h4 class="subheading align--center" style="color: <?php echo the_sub_field('subheading_color') ?>;"><?php echo $subheading; ?></h4>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading align--center" style="color: <?php echo the_sub_field('heading_color') ?>;"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
        if ($blurb) : ?>
            <div class="blurb align--center" style="color: <?php echo the_sub_field('blurb_color') ?>;"><?php echo $blurb; ?></div>
        <?php endif; ?>
    </div>
        <?php if (have_rows('faq')) : ?>
            <div class="faqs-wrapper">
                <?php while (have_rows('faq')) : the_row(); ?>
                    <div class="faq">
                        <h4 class="question" style="color: <?php the_sub_field('question_color'); ?>;"><?php the_sub_field("question") ?></h4>
                        <div class="answer" style="color: <?php the_sub_field('answer_color'); ?>;"><?php the_sub_field("answer") ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : endif; ?>
    </div>
    <style>
        .section--faqs-v4 .faqs-wrapper .faq .question::before {
            background-color:  <?php echo the_sub_field('dot_color') ?>;
        }
    </style>
</section>
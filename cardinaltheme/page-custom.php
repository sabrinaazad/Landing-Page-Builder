<?php
/* Template Name: Custom Template */

get_header();
get_template_part('modules/inc/nav-custom');

// Check value exists.
if (have_rows('modules_custom')) :
    // Loop through rows.
    while (have_rows('modules_custom')) : the_row();

        // Case: anchors layout.
        if (get_row_layout() == 'anchors') :
            get_template_part('modules/anchors');
        endif;

        // Case: banner-cta layout.
        if (get_row_layout() == 'banner_cta') :
            get_template_part('modules/banner-cta');
        endif;

        // Case: blurb layout.
        if (get_row_layout() == 'blurb') :
            get_template_part('modules/blurb');
        endif;

        // Case: cards layout.
        if (get_row_layout() == 'cards') :
            get_template_part('modules/cards');
        endif;

        // Case: contact layout.
        if (get_row_layout() == 'contact') :
            get_template_part('modules/contact');
        endif;
        
         // Case: contact-form layout.
         if (get_row_layout() == 'contact_form') :
            get_template_part('modules/contact-form');
        endif;

        // Case: corporate-sponsors layout.
        if (get_row_layout() == 'corporate_sponsors') :
            get_template_part('modules/corporate-sponsors');
        endif;

        // Case: events layout.
        if (get_row_layout() == 'events') :
            get_template_part('modules/events');
        endif;
        
         // Case: faqs layout.
         if (get_row_layout() == 'faqs') :
            get_template_part('modules/faqs');
        endif;

         // Case: faqs-v2 layout.
         if (get_row_layout() == 'faqs_v2') :
            get_template_part('modules/faqs-v2');
        endif;

        // Case: faqs-v3 layout.
        if (get_row_layout() == 'faqs_v3') :
            get_template_part('modules/faqs-v3');
        endif;

        // Case: faqs-v4 layout.
        if (get_row_layout() == 'faqs_v4') :
            get_template_part('modules/faqs-v4');
        endif;

        // Case: feature-banner layout.
        if (get_row_layout() == 'feature_banner') :
            get_template_part('modules/feature-banner');
        endif;

        // Case: featured-logos layout.
        if (get_row_layout() == 'featured_logos') :
            get_template_part('modules/featured-logos');
        endif;

        // Case: featured-services layout.
        if (get_row_layout() == 'featured_services') :
            get_template_part('modules/featured-services');
        endif;

        // Case: featured-slider layout.
        if (get_row_layout() == 'featured_slider') :
            get_template_part('modules/featured-slider');
        endif;

        // Case: featured-conditions layout.
        if (get_row_layout() == 'featured_conditions') :
            get_template_part('modules/featured-conditions');
        endif;

        // Case: four-icons-row layout.
        if (get_row_layout() == 'four_icons_row') :
            get_template_part('modules/four-icons-row');
        endif;

        // Case: four-panels layout.
        if (get_row_layout() == 'four_panels') :
            get_template_part('modules/four-panels');
        endif;

        // Case: gallery layout.
        if (get_row_layout() == 'gallery') :
            get_template_part('modules/gallery');
        endif;

        // Case: hero layout.
        if (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        endif;

        // Case: hero-v2 layout.
        if (get_row_layout() == 'hero_v2') :
            get_template_part('modules/hero-v2');
        endif;

        // Case: hero-v3 layout.
        if (get_row_layout() == 'hero_v3') :
            get_template_part('modules/hero-v3');
        endif;

        // Case: hero-v4 layout.
        if (get_row_layout() == 'hero_v4') :
            get_template_part('modules/hero-v4');
        endif;

        // Case: how-it-works layout.
        if (get_row_layout() == 'how_it_works') :
            get_template_part('modules/how-it-works');
        endif;

        // Case: icon-title-slider layout.
        if (get_row_layout() == 'icon_title_slider') :
            get_template_part('modules/icon-title-slider');
        endif;  

        // Case: icons-panel layout.
        if (get_row_layout() == 'icons_panel') :
            get_template_part('modules/icons-panel');
        endif; 
                
        // Case: image-cta layout.
        if (get_row_layout() == 'image_cta') :
            get_template_part('modules/image-cta');
        endif;

        // Case: image-slider layout.
        if (get_row_layout() == 'image_slider') :
            get_template_part('modules/image-slider');
        endif;

        // Case: locations_grid layout.
        if (get_row_layout() == 'locations_grid') :
            get_template_part('modules/locations-grid');
        endif;

        // Case: logo-grid layout.
        if (get_row_layout() == 'logo_grid') :
            get_template_part('modules/logo-grid');
        endif;

        // Case: logo-slider layout.
        if (get_row_layout() == 'logo_slider') :
            get_template_part('modules/logo-slider');
        endif;

        // Case: memberships layout.
        if (get_row_layout() == 'memberships') :
            get_template_part('modules/memberships');
        endif;

        // Case: newsletter layout.
        if (get_row_layout() == 'newsletter') :
            get_template_part('modules/newsletter');
        endif;

        // Case: packages layout.
        if (get_row_layout() == 'packages') :
            get_template_part('modules/packages');
        endif;

        // Case: process layout.
        if (get_row_layout() == 'process') :
            get_template_part('modules/process');
        endif;

        // Case: sbs-image-list layout.
        if (get_row_layout() == 'sbs_image_list') :
            get_template_part('modules/sbs-image-list');
        endif;

        // Case: sbs-image-text layout.
        if (get_row_layout() == 'sbs_image_text') :
            get_template_part('modules/sbs-image-text');
        endif;

        // Case: sbs-image-text-v2 layout.
        if (get_row_layout() == 'sbs_image_text_v2') :
            get_template_part('modules/sbs-image-text-v2');
        endif;
        
        // Case: sbs-info-services layout.
        if (get_row_layout() == 'sbs_info_services') :
            get_template_part('modules/sbs-info-services');
        endif;
        
        // Case: sbs-list-image layout.
        if (get_row_layout() == 'sbs_list_image') :
            get_template_part('modules/sbs-list-image');
        endif;
        
        // Case: sbs-text-location layout.
        if (get_row_layout() == 'sbs_text_location') :
            get_template_part('modules/sbs-text-location');
        endif;

        // Case: services layout.
        if (get_row_layout() == 'services_location') :
            get_template_part('modules/services-location');
        endif;

        // Case: services-slider layout.
        if (get_row_layout() == 'services_slider') :
            get_template_part('modules/services-slider');
        endif;

        // Case: statistics layout.
        if (get_row_layout() == 'statistics') :
            get_template_part('modules/statistics');
        endif;
        
        // Case: statistics-v2 layout.
        if (get_row_layout() == 'statistics_v2') :
            get_template_part('modules/statistics-v2');
        endif;

        // Case: team-members layout.
        if (get_row_layout() == 'team_members') :
            get_template_part('modules/team-members');
        endif;

        // Case: team-members-v2 layout.
        if (get_row_layout() == 'team_members_v2') :
            get_template_part('modules/team-members-v2');
        endif;

        // Case: team-members-v3 layout.
        if (get_row_layout() == 'team_members_v3') :
            get_template_part('modules/team-members-v3');
        endif;

        // Case: testimonials layout.
        if (get_row_layout() == 'testimonials') :
            get_template_part('modules/testimonials');
        endif;

        // Case: testimonials-v2 layout.
        if (get_row_layout() == 'testimonials_v2') :
            get_template_part('modules/testimonials-v2');
        endif;

        // Case: testimonials-v3 layout.
        if (get_row_layout() == 'testimonials_v3') :
            get_template_part('modules/testimonials-v3');
        endif;

        // Case: testimonials-v4 layout.
        if (get_row_layout() == 'testimonials_v4') :
            get_template_part('modules/testimonials-v4');
        endif;

        // Case: testimonials-v5 layout.
        if (get_row_layout() == 'testimonials_v5') :
            get_template_part('modules/testimonials-v5');
        endif;

        // Case: testimonials-v6 layout.
        if (get_row_layout() == 'testimonials_v6') :
            get_template_part('modules/testimonials-v6');
        endif;

        // Case: text-editor layout.
        if (get_row_layout() == 'text_editor') :
            get_template_part('modules/text-editor');
        endif;

        // Case: three-panels layout.
        if (get_row_layout() == 'three_panels') :
            get_template_part('modules/three-panels');
        endif;
        
        // Case: three-panels-v2 layout.
        if (get_row_layout() == 'three_panels_v2') :
            get_template_part('modules/three-panels-v2');
        endif;

        // Case: three-steps layout.
        if (get_row_layout() == 'three_steps') :
            get_template_part('modules/three-steps');
        endif;

        // Case: tiles layout.
        if (get_row_layout() == 'tiles') :
            get_template_part('modules/tiles');
        endif;

        // Case: two-column-list layout.
        if (get_row_layout() == 'two_column_list') :
            get_template_part('modules/two-column-list');
        endif;

        // Case: two-panels layout.
        if (get_row_layout() == 'two_panels') :
            get_template_part('modules/two-panels');
        endif;

        // Case: values layout.
        if (get_row_layout() == 'values') :
            get_template_part('modules/values');
        endif;
        
    // End loop.
    endwhile;
// No value.
else :
// Do something...
endif;

get_template_part('modules/inc/footer-custom');
get_footer();
?>


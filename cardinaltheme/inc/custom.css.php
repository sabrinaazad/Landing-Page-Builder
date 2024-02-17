<?php
header("Content-type: text/css; charset: UTF-8");

//Global variables
$baseColor = get_field('base_color', 'options');
$lightGray = get_field('light_gray', 'options');
$darkGray = get_field('dark_gray', 'options');

$primary = get_field('primary', 'options');
$secondary = get_field('secondary', 'options');
$tetriary = get_field('tetriary', 'options');

$topbarColor = get_field("topbar_color", "options"); 

$fontFamily = get_field("font_family", "options"); 
$headingFamily = get_field("heading_family", "options");
$subheadingFamily = get_field("subheading_family", "options");

$fontFamilyBold = get_field("font_family_bold", "options");
$fontFamilyRegular = get_field("font_family_regular", "options");
$fontFamilyLight = get_field("font_family_light", "options");

$footerBg = get_field ("footer_bg", "options");
$footerColor = get_field ("footer_color", "options");

//Module specific global variables

$checkmark2 = get_field("sbs_list_image__checkmark", "options");

$teamMembersBgV2 = get_field ("team_members__bg_v2", "options");

$quoteLeft = get_field ("testimonials__quote_left", "options");
$quoteRight = get_field ("testimonials__quote_right", "options");

$testimonialsBgV3 = get_field ("testimonials__bg_v3", "options");
$quoteLeftV3 = get_field ("testimonials__quote_left_v3", "options");
$quoteRightV3 = get_field ("testimonials__quote_right_v3", "options");

$quoteLeftV4 = get_field ("testimonials__quote_v4", "options");

$quoteLeftV5 = get_field ("testimonials__quote_left_v5", "options");
$quoteRightV5 = get_field ("testimonials__quote_right_v5", "options"); 

$twoPanelsBG = get_field ("two_panels__bg", "options");
?>

body {
    color:  <?php echo $baseColor ?>;
    font-family: <?php echo $fontFamily ?>;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: <?php echo $secondary ?>;
    font-family: <?php echo $headingFamily ?>;
}
a {
    color: <?php echo $baseColor ?>;
}
b, 
strong {
    font-family: <?php echo $fontFamilyBold ?>;
}
.subheading {
    color: <?php echo $primary ?>;
    font-family: <?php echo $subheadingFamily ?>;
}
.btn-primary {	
	background-color: <?php echo $primary ?>;
}
.btn-secondary {
    background-color: <?php echo $secondary ?>;
}


.topbar,
.topbar .top-nav__phone a,
.top-nav li a {
    color: <?php echo $topbarColor ?>;
}
.hamburger-button__bar--top,
.hamburger-button__bar--middle,
.hamburger-button__bar--bottom {
    color: <?php echo $secondary ?>;
    background-color: <?php echo $secondary ?>;
}
.main-nav__drawer .primary-nav > li a {
    color: <?php echo $baseColor ?>;
}
.main-nav__drawer .primary-nav > li.current-menu-item > a,
.main-nav__drawer .primary-nav > li.current-menu-ancestor > a {
    color: <?php echo $primary ?>;
    border-bottom: 2px solid <?php echo $primary ?>;
}
@media only screen and (min-width: 768px) {
    .main-nav__drawer .primary-nav .sub-menu {
        background-color: <?php echo $secondary ?>;
    }
    .main-nav__drawer .primary-nav .sub-menu .current-menu-item > a {
        color: <?php echo $primary ?>;
    }
}


.footer {
    background-color: <?php echo $footerBg ?>;
    color: <?php echo $footerColor ?>;
}
.footer a {
    color: <?php echo $footerColor ?>;
}
.footer .menu-container .footer-nav li.btn {
    background-color: <?php echo $primary ?>;
}


.slick-slider .slick-dots li button:before {
    color: <?php echo $secondary ?>;
}
.slick-slider .slick-dots li.slick-active button:before {
    color: <?php echo $primary ?>;
}


.section--anchors .anchor_slider .anchor-box:hover::after {
    background-color:  <?php echo $secondary ?>;
    color: <?php echo $tetriary ?>;
}
.section--anchors .anchor_slider .anchor-box::before {
    background-color: <?php echo $secondary ?>;
}


.section--cards .cards_slider .card {
    border-color: <?php echo $secondary ?>;
}
.section--cards .cards_slider .card .title {
    font-family: <?php echo $fontFamilyBold ?>;
}


.section--contact-form {
    background-color: <?php echo $primary ?>;
}
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=color],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=date],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=datetime-local],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=datetime],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=email],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=month],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=number],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=password],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=search],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=tel],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=text],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=time],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=url],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme input[type=week],
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme select,
.section--contact-form .two-col .col:first-child .gform_wrapper.gravity-theme textarea {
    font-family: <?php echo $fontFamilyRegular?>;
}
.section--contact-form .gform_wrapper.gravity-theme .gform_footer button,
.section--contact-form .gform_wrapper.gravity-theme .gform_footer input,
.section--contact-form .gform_wrapper.gravity-theme .gform_page_footer button,
.section--contact-form .gform_wrapper.gravity-theme .gform_page_footer input {
    background-color: <?php echo $secondary ?>;
}


.section--contact .two-col .location-details {
    border-color: <?php echo $tetriary ?>;
}
.section--contact .two-col .location-details .phone {
    color: <?php echo $tetriary ?>;
    font-family: <?php echo $fontFamilyRegular ?>; 
}
.section--contact .two-col .location-details .hours .title {
    color: <?php echo $tetriary ?>;
    font-family: <?php echo $fontFamilyRegular ?>;
}
.section--contact .two-col .contact-details {
    border-color: <?php echo $tetriary ?>;
}
.section--contact .two-col .contact-details h3 {
    color: <?php echo $tetriary ?>;
}
.section--contact .two-col .contact-details .team .team-member .name {
    color: <?php echo $tetriary ?>;
    font-family: <?php echo $fontFamilyBold ?>;
}
.section--contact .two-col .contact-details .team .team-member .title {
    font-family: <?php echo $fontFamilyRegular ?>;
}
.section--contact .two-col .second {
    background-color: <?php echo $primary ?>;
}
.section--contact .two-col .second .form .gform_button.button {
    font-family: <?php echo $fontFamilyBold ?>;
    background-color: <?php echo $secondary ?>;
}


.section--corporate-sponsors .sponsor-level.one .heading {
    background-color: <?php echo $primary ?>;
    border-bottom: 0.25em solid <?php echo $secondary ?>; 
    border-right: 0.25em solid <?php echo $secondary ?>;
}
.section--corporate-sponsors .sponsor-level.two .heading {
    background-color: <?php echo $secondary ?>;
    border-bottom: 0.25em solid <?php echo $tetriary ?>;
    border-right: 0.25em solid <?php echo $tetriary ?>;
}
.section--corporate-sponsors .sponsor-level.three .heading {
    background-color: <?php echo $tetriary ?>;
    border-bottom: 0.25em solid <?php echo $primary ?>;
    border-right: 0.25em solid <?php echo $primary ?>;
}
.section--corporate-sponsors .content-wrapper .company .logo-wrapper::after {
    background-color: <?php echo $secondary ?>;
}


.section--events .content-wrapper {
    color: <?php echo $secondary ?>;
}
.section--events .content-wrapper .heading {
    color: <?php echo $secondary ?>;
}


.section--faqs .heading-wrapper {
    background-color: <?php echo $primary ?>;
}
.section--faqs .faq-wrapper {
    background-color: <?php echo $secondary ?>;
}
.section--faqs .faq-wrapper .faq .arrow-down {
    color: <?php echo $primary ?>;
}


.section--faqs-v2 .faq-wrapper {
    background-color: <?php echo $primary ?>;
}


.section--faqs-v3 .faq-wrapper, 
.section--faqs-v3 .faq-wrapper .faq {
    border-color: <?php echo $primary ?>;
}
.section--faqs-v3 .faq-wrapper .faq .question #button {
    color: <?php echo $primary ?>;
    background-color: <?php echo $secondary ?>;
}
.section--faqs-v3 .faq-wrapper .faq .question #button span {
    background-color: <?php echo $primary ?>;
}


.section--faqs-v4 .faqs-wrapper .faq .question::before {
    background-color:  <?php echo $primary ?>;
}


.section--feature-banner {
    background-color: <?php echo $secondary ?>;
}
.section--feature-banner .two-col .col:last-child .banners_slider .banner .subheading,
.section--feature-banner .two-col .col:last-child .banners_slider .banner .heading  {
    color: <?php echo $tetriary ?>;
}
.section--feature-banner .two-col .col:last-child .banners_slider .slick-prev::before,
.section--feature-banner .two-col .col:last-child .banners_slider .slick-next::before  {
    color: <?php echo $primary ?>;
    font-family: <?php echo $fontFamilyRegular ?>;
}


.section--featured-services .heading {
    color: <?php echo $primary ?>;
}
.section--featured-services .featured_slider .slide.slick-current {
    background-color: <?php echo $primary ?>;
}
section--featured-services .heading {
    color: <?php echo $secondary ?>;
}
section--featured-services .subheading {
    color: <?php echo $secondary ?>;
}
.section--featured-services .featured_slider .slide.slick-current .btn {
    color: <?php echo $primary; ?>;
}
.section--featured-services .featured_slider .slide h4 {
    color: <?php echo $primary; ?>;
}
.section--featured-services .featured_slider slick-prev::before {
    font-family: <?php echo $fontFamilyRegular ?>;
}
.section--featured-services .featured_slider slick-next::before {
    font-family: <?php echo $fontFamilyRegular ?>;
}


.section--featured-slider {
    color: <?php echo $secondary ?>;
}
.section--featured-slider .section-wrapper .featured-slider_v2 .slide .list {
    background-color: <?php echo $primary ?>;
}
.section--featured-slider .section-wrapper .featured-slider_v2 .slide .list li .icon {
    border-color: <?php echo $secondary ?>;
}
.section--featured-slider .section-wrapper .featured-slider_v2 .slide .heading {
    color: <?php echo $secondary ?>;
}
.section--featured-slider .section-wrapper .slick-slider .slick-dots li button:before {
    color: <?php echo $secondary ?>;
}
.section--featured-slider .section-wrapper .slick-slider .slick-dots .slick-active button:before {
    color: <?php echo $secondary ?>;
}


.section--four-icons-row .icons-wrapper .title {
    font-family: <?php echo $fontFamilyBold ?>;
    color: <?php echo $secondary ?>;
}
.section--four-icons-row .icons-wrapper.lines .content .title::after {
    background-color:  <?php echo $secondary ?>;
}


.section--four-panels .panels slick-slider .slick-dots li button:before {
    color: <?php echo $tetriary ?>;
}
.section--four-panels .panels slick-slider .slick-dots li.slick-active button:before {
    color: <?php echo $secondary ?>;
}
.section--four-panels .panels slick-slider .slick-prev::before {
    color: <?php echo $primary ?>;
    font-family: <?php echo $fontFamilyRegular ?>;
}
.section--four-panels .panels slick-slider .slick-next::before {
    color: <?php echo $primary ?>;
    font-family: <?php echo $fontFamilyRegular ?>;    
}
.section--four-panels .panels .panel {
    border-color: <?php echo $primary ?>;
    background-color: <?php echo $tetriary ?>;
}


.section--hero-v2 .two-col .col:first-child .heading::after {
    background-image: linear-gradient(to left, <?php echo $secondary ?>, rgba(255, 255, 255, 0));
}


.section--hero-v3 .content-top {
    background-color: <?php echo $tetriary ?>;
}
.section--hero-v3 .content-top::after {
    background-color: <?php echo $tetriary ?>;
}
.section--hero-v3 .content-bottom {
    background-color: <?php echo $primary ?>;
}


.section--hero-v4 .section-wrapper .heading {
    color: <?php echo $secondary ?>;
}


.section--icon-title-slider .icon_title_slider .slide .icon {
    border-color: <?php echo $tetriary ?>;
}
.section--icon-title-slider .icon_title_slider .slide .title {
    background-color: <?php echo $secondary ?>;
    font-family: <?php echo $fontFamilyBold ?>;
}
.section--icon-title-slider .icon_title_slider a.slide:hover .icon {
    background-color: <?php echo $tetriary ?>;
}
.section--icon-title-slider .icon_title_slider a.slide:hover .title {
    background-color: <?php echo $tetriary ?>;
    color: <?php echo $secondary ?>;
}


.section--icons-panel .heading-wrapper .heading {
    color: <?php echo $primary ?>;
}


.section--image-cta {
    background-color: <?php echo $secondary ?>;
}


.section--logo-grid .grid .grid-item .image-wrapper {
    border-color: <?php echo $primary ?>;
}


.section--logo-slider {
    background-color: <?php echo $secondary ?>;
}


.section--memberships .memberships_slider .panel {
    border-color: <?php echo $secondary ?>;
}
.section--memberships .memberships_slider .panel:nth-child(even) {
    border: 1px solid <?php echo $tetriary ?>;
}
.section--memberships .memberships_slider .panel h4 {
    background-color: <?php echo $secondary ?>;
}
.section--memberships .memberships_slider .panel .detail:nth-child(odd) {
    background-color : <?php echo $lightGray ?>;
}
.section--memberships .memberships_slider .panel .button-wrapper {
    background-color : <?php echo $secondary ?>;
}
.section--memberships .memberships_slider .panel:nth-child(even) h4,
.section--memberships .memberships_slider .panel:nth-child(even) .button-wrapper {
    background-color: <?php echo $tetriary ?>;
}


.section--newsletter .two-col .col:first-child .content-wrapper {
    background-color: <?php echo $secondary ?>;
}
.section--newsletter .two-col .col:first-child .form {
    background-color: <?php echo $tetriary ?>;
}
.section--newsletter .two-col .col:first-child .form .gform_button.button {
    font-family: <?php echo $fontFamilyBold ?>;
    background-color: <?php echo $primary ?>;
}


.section--packages {
    background-color: <?php echo $primary ?>;
}
.section--packages .package-slider .package {
    border-color: <?php echo $tetriary ?>;
}
.section--packages .package-slider .package .title {
    color: <?php echo $primary ?>;
    font-family: <?php echo $fontFamilyBold ?>;
}
.section--packages .package-slider .package .title::after {
    background-color: <?php echo $secondary ?>;
}
.section--packages .package-slider .package .price {
    color: <?php echo $tetriary ?>;
    font-family: <?php echo $fontFamilyBold ?>;
}
.section--packages .package-slider .package ul li::before {
    color: <?php echo $secondary ?>; 
}


.section--process {
    background-color: <?php echo $primary ?>;
}


.section--sbs-image-list .two-col .col .image-wrapper img {
    border-color: <?php echo $secondary ?>;
}
.section--sbs-image-list .two-col .col .list li b {
    font-family: <?php echo $fontFamilyBold ?>;
    color: <?php echo $secondary ?>;
}


.section--services-location {
    background-color: <?php echo $lightGray ?>;
}
.section--services-location .icon {
    border: 0.35em solid <?php echo $secondary ?>;
}
.section--services-location .title {
    background-color: <?php echo $secondary ?>;
}
.section--services-location .panels a.btn-white {
    color: <?php echo $secondary ?>;
}
.section--services-location a.slide:hover .icon {
    border-color: <?php echo $primary ?>;
    background-color: <?php echo $secondary ?>;
}
.section--services-location a.slide:hover .title {
    background-color: <?php echo $primary ?>;
}
.section--services-location .two-col .col:nth-child(2) {
    background-color: <?php echo $secondary ?>;
}
@media only screen and (min-width: 768px) {
    .section--services-location .services_slider .slide .title {
        color: <?php echo $secondary ?>;
    }
    .section--services-location .two-col .col:nth-child(2)::after {
        background-color: <?php echo $secondary ?>;
    }
}


.section--services-slider .services_slider_v2 .post:hover::after {
    background-color: <?php echo $secondary ?>;
}


.section--statistics .panels .panel .number {
    color: <?php echo $tetriary ?>;
    font-family: <?php echo $fontFamilyBold ?>;
}
.section--statistics .panels .panel .title {
    color: <?php echo $tetriary ?>;
    font-family: <?php echo $fontFamilyRegular ?>;
    border-bottom-color: <?php echo $tetriary ?>;
}


.section--statistics-v2 .panels .panel .stat-wrapper .number {
    color: <?php echo $tetriary ?>;
}
.section--statistics-v2 .panels .panel .stat-wrapper .percent {
    color: <?php echo $tetriary ?>;
}
.section--statistics-v2 .panels .panel .stat-wrapper .title {
    color: <?php echo $tetriary ?>;
    font-family: <?php echo $fontFamilyRegular ?>;
}


.section--team-members .team_slider .slide .image-wrapper img {
    border-color: <?php echo $secondary ?>;
}
.section--team-members .team_slider .slide .name {
    font-family: <?php echo $fontFamilyBold ?>;
    color: <?php echo $darkGray ?>;
}
.section--team-members .team_slider .slide .title {
    color: <?php echo $darkGray ?>;
}
.section--team-members .team_slider_2 .slide img {
    border-color: <?php echo $primary ?>;
}
.section--team-members .team_slider_2 .slide.slick-current img {
    border: 0.35em solid <?php echo $secondary ?>;
}



.section--team-members-v2 .team_slider_3 .slide .image-wrapper img {
    box-shadow: -10px 10px 0px 0px <?php echo $tetriary ?>;
}
.section--team-members-v2 .team_slider_3 .slide .content {
    background-color: <?php echo $primary ?>;
}
.section--team-members-v2 .team_slider_4 .slick-current img {
    box-shadow: -5px 5px 0px 0px <?php echo $tetriary ?>;
}


.section--team-members-v3 .team_slider_6 .slide .content {
    background-color:  <?php echo $primary ?>;
}


.section--testimonials-v2 .subheading {
    color: <?php echo $primary ?>;
}
.section--testimonials-v2 .heading::after {
    background-color: <?php echo $primary ?>;
}
.section--testimonials-v2 .testimonials_slider_v2 .testimonial {
    border-color: <?php echo $secondary ?>;
}


.section--testimonials-v3 .two-col .col.first .featured-image::after {
    background-color: <?php echo $primary ?>;
}
.section--testimonials-v3 .two-col .col.second .testimonials_slider_v3 .slide {
    background-color: <?php echo $secondary ?>;
}
.section--testimonials-v3 .two-col .col.second .testimonials_slider_v3 .slick-dots li button:before {
    color: <?php echo $secondary ?>;
}
.section--testimonials-v3 .two-col .col.second .testimonials_slider_v3 .slick-dots .slick-active button:before {
    color: <?php echo $tetriary ?>;
}


.section--testimonials-v4 .testimonials_slider_v4 .slick-dots li button:before {
    color: <?php echo $secondary ?>;
}
.section--testimonials-v4 .testimonials_slider_v4 .slick-dots .slick-active button:before {
    color: <?php echo $tetriary ?>;
}


.section--testimonials-v5 .testimonials_slider_v5 .slick-dots li button:before {
    color: <?php echo $secondary ?>;
}
.section--testimonials-v5 .testimonials_slider_v5 .slick-dots .slick-active button:before {
    color: <?php echo $tetriary ?>;
}


.section--three-panels .panel {
    border-color: <?php echo $primary ?>;
}
.section--three-panels .two-col .col:nth-child(2) .panel {
    border-color: <?php echo $primary ?>;
}
.section--three-panels .subheading, .section--three-panels .heading {
    color: <?php echo $primary ?>;
}


.section--three-panels-v2 .panels .panel {
    border-color: <?php echo $primary ?>;
    background-color: <?php echo $tetriary ?>;
}


.section--three-steps {
    background-color: <?php echo $tetriary ?>;
}
.section--three-steps .heading {
    font-family: <?php echo $fontFamilyRegular ?>;
}
.section--three-steps .heading b {
    font-family: <?php echo $fontFamilyBold ?>;
}
.section--three-steps .heading span {
    color: <?php echo $primary ?>;
}
.section--three-steps .heading-wrapper .heading::after {
    background-image: linear-gradient(to left, <?php echo $secondary ?>, rgba(255, 255, 255, 0));
}


.section--two-column-list .list li .title {
    color: <?php echo $secondary ?>;
    font-family: <?php echo $fontFamilyBold ?>;
}


.section--two-panels {
    background-image: url(<?php echo $twoPanelsBG ?>);
}


.section--values {
    background-color: <?php echo $primary ?>;
}
.section--values .two-col .col:first-child .list li .title {
    font-family: <?php echo $fontFamilyBold ?>;
}
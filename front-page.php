<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>


  <?php // Slider area
    if( get_field('divisionParent_slider') != '' ):
      $slider = get_field('divisionParent_slider');
        $slider_gallery = $slider['slider_gallery'];
        $slider_category = $slider['slider_category'];
        $slider_upperText = $slider['slider_upperText'];
        $slider_lowerText = $slider['slider_lowerText'];
  ?>
    <section class="slider slider--division-parent">
      <?php
        include( locate_template( 'templates/10-sliders/100-basic-slider.php', false, false ));
      ?>
    </section>
  <?php endif; ?>


  <?php // Breadcrumbs ?>
  <section class="breadcrumbs breadcrumbs--division-parent">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }
      ?>
    </div>
  </section>


  <?php // Intro Content
    if( get_field('divisionParent_intro') != '' ):
      $introContent = get_field('divisionParent_intro');
        $centeredContent_headline = $introContent['centeredContent_headline'];
        $centeredContent_body = $introContent['centeredContent_body'];
  ?>
    <section class="centered-content centered-content--division-parent">
      <?php
        include( locate_template( 'templates/20-general/200-centered-content.php', false, false ));
      ?>
    </section>
  <?php endif; ?>


  <?php // Related Links
    if( get_field('divisionParent_related') != '' ):
      $relatedLinks = 'divisionParent_related';
        $linkColumn = $relatedLinks . '_linkColumn'; // Repeater
  ?>
    <section class="related-links related-links--division-parent">
      <?php
        include( locate_template( 'templates/30-options/361-division-related-links.php', false, false ));
      ?>
    </section>
  <?php endif; ?>


  <?php // Featured Division Links
    if( get_field('divisionParent_features') != '' ):
      $featuredLinks = get_field('divisionParent_features');
        $divisionFeature_headline = $featuredLinks['divisionFeature_headline'];
        $divisionFeature_solution = $featuredLinks['divisionFeature_solution'];
        $divisionFeature_simulator = $featuredLinks['divisionFeature_simulator'];
  ?>
    <section class="division-feature division-feature--division-parent">
      <?php
        include( locate_template( 'templates/40-divisions/410-division-feature-block.php', false, false ));
      ?>
    </section>
  <?php endif; ?>


  <?php // Secondary Content
    if( get_field('divisionParent_secondary') != '' ):
      $secondaryContent = get_field('divisionParent_secondary');
        $centeredContent_headline = $secondaryContent['centeredContent_headline'];
        $centeredContent_body = $secondaryContent['centeredContent_body'];
  ?>
    <section class="centered-content centered-content--division-parent">
      <?php
        include( locate_template( 'templates/20-general/200-centered-content.php', false, false ));
      ?>
    </section>
  <?php endif; ?>


  <?php // Support Feature Block
    if( get_field('divisionParent_support') != '' ):
      $supportBlock = get_field('divisionParent_support');
        $divisionSupport_headline = $supportBlock['divisionSupport_headline'];
        $divisionSupport_links = 'divisionParent_support' . '_divisionSupport_links';
  ?>
    <section class="division-support division-support--division-parent">
      <?php
        include( locate_template( 'templates/40-divisions/420-division-support-block.php', false, false ));
      ?>
    </section>
  <?php endif; ?>


  <?php // Call to Action
    $cta_tagline = get_field('cta_tagline', 'option');
    $cta_buttonText = get_field('cta_buttonText', 'option');
    $cta_phoneNumber = get_field('cta_phoneNumber', 'option');
    $cta_background = get_field('cta_background', 'option');
  ?>
  <section class="call-to-action call-to-action--division-parent">
    <?php
      include( locate_template( 'templates/50-promotions/520-call-to-action.php', false, false ));
    ?>
  </section>


  <?php // Testimonial
    if( get_field('divisionParent_testimonial') != '' ):
      $testimonial = get_field('divisionParent_testimonial');
        $testimonial_link = $testimonial['testimonial_link'];
  ?>
    <section class="testimonial testimonial--division-parent">
      <?php
        include( locate_template( 'templates/50-promotions/530-testimonial.php', false, false ));
      ?>
    </section>
  <?php endif; ?>

<?php endwhile; ?>

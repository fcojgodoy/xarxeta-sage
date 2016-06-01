<?php use Roots\Sage\Titles; ?>

<div class="row">
  <div class="col-md-4">
    <div class="page-header">

      <h1><?= Titles\title(); ?></h1>

      <?php
        // Subtitle metadata - text
        $term = rwmb_meta( 'rw_title-caption' );
        if ( !empty( $term ) ) {
            $content = '<h2 class="h5 text-uppercase">';
            $content .= $term;
            $content .= '</h2>';
            echo $content;
        }
       ?>

    </div>

    <div class="text-center">
      <?php
       if ( has_post_thumbnail() ) {
          the_post_thumbnail( FULL );
        }
      ?>
    </div>
    <div class="toc-affix">
      <?php dynamic_sidebar('sidebar-page'); ?>
    </div>

  </div>

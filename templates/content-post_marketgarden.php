<?php
/**
 * @package xarxeta-sarge
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php
			// Subtitle metadata - text
			$term = rwmb_meta( 'subtitle' );
			if ( !empty( $term ) ) {
					$content = '<h2>';
					$content .= $term;
					$content .= '</h2>';
					echo $content;
			}
		 ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			// Main image metabox - image
			$images = rwmb_meta( 'main-image', 'size=FULL' );
	    if ( !empty( $images ) ) {
	        foreach ( $images as $image ) {
	            echo "<img src='{$image['url']}' class='img-responsive' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
	        }
	    }
		 ?>

		<?php
			// Description metabox - text
			$description = rwmb_meta( 'description' );
	    if ( !empty( $description ) ) {
							echo '<h3>' . __('Description', 'xarxeta-sarge') . '</h3>';
	            echo $description;
	        }
		 ?>

		 <?php
			 // Products metabox - taxonomy
			 $terms = rwmb_meta( 'products' );
	     if ( !empty( $terms ) ) {
		 			$content = '<h3>' . __('Products', 'xarxeta-sarge') . '</h3>';
         	$content .= '<ul>';
	        	foreach ( $terms as $term ) {
	          		$content .= sprintf(
	                 '<li><a href="%s" title="%s">%s</a></li>',
	                 get_term_link( $term, 'tax_slug' ),
	                 $term->name,
	                 $term->name
	             );
	         }
	         $content .= '</ul>';
	         echo $content;
	     }
			?>

			<?php
				// Sales months metabox - text
				$sales_months = rwmb_meta( 'sales-months' );
				if ( !empty( $sales_months ) ) {
								echo '<h3>' . __('Sales months', 'xarxeta-sarge') . '</h3>';
								echo $sales_months;
						}
			 ?>

			<?php
				// Timetable metabox - text
				$timetalbe = rwmb_meta( 'timetable' );
				if ( !empty( $timetalbe ) ) {
					echo '<h3>' . __('Timetable', 'xarxeta-sarge') . '</h3>';
					echo $timetalbe;
						}
			 ?>

			 <?php echo '<h3>' . __('Contact', 'xarxeta-sarge') . '</h3>' ?>
			 <?php
				 	// Telephone metabox - number
					$telephone = rwmb_meta( 'telephone-1' );
					if ( !empty( $telephone ) ) {
						echo '<h4>' . __('Telephone', 'xarxeta-sarge') . '</h4>';
				    echo "<a href='tel:{$telephone}'>{$telephone}</a>";
					}
			  ?>

				<?php
					// URL metabox - text
					$url = rwmb_meta( 'url' );
				  if ( !empty( $url ) ) {
						echo '<h4>' . __('Web page', 'xarxeta-sarge') . '</h4>';
				  	echo "<a href='{$url}' target='_blanck'>{$url}</a>";
				  }
				 ?>

				 <?php
					 // Email metabox - text
					 $email = rwmb_meta( 'email' );
					 if ( !empty( $email ) ) {
						 			 echo '<h4>' . __('Email', 'xarxeta-sarge') . '</h4>';
									 echo "<a href='mailto:{$email}' target='_blanck'>{$email}</a>";
							 }
					?>

					<?php
						// Map metabox - map
						$args = array(
				        'type'         => 'map',
				        'width'        => '100%',
				        'height'       => '300px',
				        'js_options'   => array(
				            // 'mapTypeId'   => 'HYBRID',
				            'zoomControl' => true,
				            'zoom'        => 10, // You can use 'zoom' inside 'js_options' or as a separated parameter
				        )
				    );
						$map = rwmb_meta ( 'map' );
						if ( !empty( $map ) ) {
							echo '<h4>' . __('Location', 'xarxeta-sarge') . '</h4>';
							echo rwmb_meta( 'map', $args );
						}
					 ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'xarxeta-sarge' ),
				'after'  => '</div>',
			) );
		?>


</article><!-- #post-## -->

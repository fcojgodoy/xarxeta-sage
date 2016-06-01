      <div class="content-page">

        <section>
          <div class="row">
            <div class="v-align-md">
              <div class="col-md-6">

                <!-- Element: Airy Block -->
                <div class="airy-block">
                  <h2>Xarxa de Pagesos Agroecològics de Catalunya</h2>
                  <p>
                    Som una xarxa de pageses i pagesos agroecològics que des de les diverses experiències pràctiques, individuals i col·lectives, busquem la dignitat en la nostra feina, la qual entenem com una forma de viure.
                  </p>
                  <p>
                    Creant un model social, ambiental i econòmic en el món rural basat en la justícia social, la solidaritat, la cooperació i la sostenibiltat.
                  </p>
                </div>

              </div>
              <div class="col-md-6">
                <a href="/que-es-la-xarxeta" type="button" class="btn btn-botanic btn-lg btn-block">coneix-nos millor</a>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="row">
            <div class="col-xs-12">
              <h2 class="text-center">Els nostres horts</h2>
            </div>
          </div>
          <div class="row color-random-content">

            <?php
                $args = array(
                  'post_type' => 'post_marketgarden',
                  'showposts' => '8'
                );
                // The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query -> have_posts() ) {
                	while ( $the_query -> have_posts() ) {
                		$the_query -> the_post();
                    echo '<div class="col-md-3">';
                    echo '<div class="card-block">';
                    echo '<a class="card-image" href="' . get_the_permalink() . '"></a>';

                		// echo '<h4>' . get_the_title() . '</h4>';
                		echo '<div class="card-text"><h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';

              			// Subtitle metadata - text
              			$term = rwmb_meta( 'subtitle' );
              			if ( !empty( $term ) ) {
              					$content = '<h5><a href="' . get_the_permalink() . '">';
              					$content .= $term;
              					$content .= '</a></h5>';
              					echo $content;
              			}

                    echo '</div></div></div>';


                	}
                	// echo '</div>';
                } else {
                	// no posts found
                  echo 'nothing the plastin';
                }
                /* Restore original Post Data */
                wp_reset_postdata();
              ?>

            </div>
          </div>
        </section>


        <section>
          <div class="row">
            <div class="col-xs-12">
              <h2 class="text-center">Criteris Socials i Econòmics</h2>
              <span class="icon-botanicals4"></span>
            </div>
            <div class="col-md-6">
              <h3>Tècniques de cultiu agroecològic</h3>
              <p>
                Recuperem tècniques i pràctiques tradicionals; intercanviem coneixements tècnics, pràctics i pedagògics; conservem, intercanviem i recuperem varietats locals d'espècies hortícoles, racionalitzem l'ús dels recursos naturals (aigua, terra, nutrients, energia,...); reduim al màxim la generació de residus i en fem una gestió adient; defugim el monocultiu i potenciem la biodiversitat; defugim l'ús, l'alliberament i la contaminació per transgènic.
              </p>
            </div>

            <div class="col-md-6">
              <h3>Practiquem la transformació social</h3>
              <p>
                Assegurem un salari digne per totes les persones que treballem la terra per tal de dignificar la vida dels/les pagesos/ses i no permetre la seva explotació; assegurem la sostenibilitat econòmica i l'autonomia de les nostres experiències agroecològiques; programem i organitzem la producció conjuntament; teixim una organització social de cooperació, compromís i solidaritat entre nosaltres.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h3>Practiquem la transformació econòmica</h3>
              <p>
                Tenim una relació directa de confiança entre nosaltres (els/les productors/res) i els consumidors finals; potenciem els circuits curts en l'espai (de producció local) i en el temps (de temporada); distribuim els productes localment i al consumidor final (mercats, servei a domicili, cooperatives de consum,...); garantim uns preus equitatius i justos per a tothom; treballem per a la sobirania alimentària; recolçem les economies locals responsables, solidàries i crítiques (cooperatives de consum - ecoconsum, centres socials alternatius, ...)
              </p>
            </div>

            <div class="col-md-6">
              <h3>Practiquem la transformació cultural</h3>
              <p>
                Transmetem el coneixement i la praxis agroecològica als demés; prenem les decisions de forma directa i assembleària; i divulguem l'agroecologica i els seus principis arreu.
              </p>
              <br>
              <a href="/que-es-la-xarxeta" type="button" class="btn btn-botanic btn-lg btn-block">Més informació?</a>
            </div>
          </div>
        </section>

        <section>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-center">Etem en contacte</h2>
              <div class="fw-page-builder-content">
                  <section class="fw-main-row ">
                  <div class="fw-container">
                    <div class="fw-row">
                  <div class="fw-col-xs-12">
                  <div class="form-wrapper contact-form">
                  <form data-fw-form-id="fw_form" class="fw_form_fw_form" method="post" action="http://desarrollo.96.lt/xarxeta/" data-fw-ext-forms-type="contact-forms"><input name="fwf" value="fw_form" type="hidden"><input id="_nonce_271fca0b2bb618b7f84815c4d944dab4" name="_nonce_271fca0b2bb618b7f84815c4d944dab4" value="5d0459d5c1" type="hidden"><input name="_wp_http_referer" value="/xarxeta/" type="hidden"><input name="fw_ext_forms_form_type" value="contact-forms" type="hidden"><input name="fw_ext_forms_form_id" value="4fcf29156855c1d77116928e72b1dc06" type="hidden"><div class="wrap-forms">
                  <div class="fw-row"></div><div class="fw-row"><div class="fw-col-xs-12 form-builder-item">
                  <div class="field-text">
                    <label for="id-1">El teu nom			<sup>*</sup>		</label>
                    <input name="text_5336ce3" placeholder="" value="" id="id-1" required="required" type="text">
                      </div>
                </div></div><div class="fw-row"><div class="fw-col-xs-12 form-builder-item">
                  <div class="field-text">
                    <label for="id-2">La Teva adreça de correu electrònic			<sup>*</sup>		</label>
                    <input name="email_bbdd7bb" placeholder="" value="" id="id-2" required="required" type="text">
                      </div>
                </div></div><div class="fw-row"><div class="fw-col-xs-12 form-builder-item">
                  <div class="field-textarea">
                    <label for="id-3">El teu missatge			<sup>*</sup>		</label>
                    <textarea name="textarea_89206c7" placeholder="" id="id-3" required="required"></textarea>
                      </div>
                </div></div><div class="fw-row"></div></div><div>
                  <input value="Enviar" type="submit">
                </div></form></div></div>
                </div>

                  </div>
                </section>
            </div>
            </div>
          </div>
        </section>

        <section>
          <?php the_content(); ?>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </section>

</div>

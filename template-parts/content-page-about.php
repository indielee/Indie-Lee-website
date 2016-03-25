<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Indie Lee
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>

    <div class="video-hero">
      <label class="button inverted" for="videoModal">
        <div class="modal-trigger">
					<?php esc_html_e( 'Play video', 'indie-lee' ); ?>
				</div>
      </label>
      <a href="/shop" class="button inverted">
				<?php esc_html_e( 'Go to store', 'indie-lee' ); ?>
			</a>
    </div>

    <div class="modal video">
      <input class="modal-state" id="videoModal" type="checkbox" />
      <div class="modal-fade-screen">
        <div class="modal-inner">
          <iframe id="aboutVideo" src="https://player.vimeo.com/video/15567447?color=9fb137?api=1&player_id=vimeoplayer" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="featured-media">
      <h2>
				<?php esc_html_e( 'As seen in', 'indie-lee' ); ?>
			</h2>
      <div class="logos-container">
        <div class="media-logo">
					<img src="/wp-content/uploads/2016/02/modette.png" alt="Modette" />
        </div>
        <div class="media-logo">
					<img src="/wp-content/uploads/2016/02/elle.png" alt="Elle" />
        </div>
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/kosmetik.png" alt="Kosmetik" />
        </div>
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/bazaar.png" alt="Bazaar" />
        </div>
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/metro-mode.png" alt="Metro Mode" />
        </div>
        <div class="media-logo">
          <img src="/wp-content/uploads/2016/02/vogue.png" alt="Vogue" />
        </div>
      </div>
    </div>

    <div class="about-indie">
      <div class="about-indie-image">
        <img src="/wp-content/uploads/2016/03/indie.jpg" alt="About Indie" />
      </div>
      <div class="about-indie-text">
        <h2>Om Indie Lee</h2>
        <p>
          Efter att ha vunnit kampen över en svår hjärntumör 2009, som enligt läkarna troligen var ett resultat av miljögifter, vaknade Indie Lee upp med nya krafter och en dröm om att skapa en modern, hållbar och ekologisk hudvårdsserie som bar hennes namn.
        </p>
        <p>
          Hon hade en tanke om att skapa en speciell kollektion av hållbara och moderna hudvårdsprodukter som både skulle förbättra vår miljö och få henne och hennes medmänniskor att må bättre. Indie Lees gripande livsöde har visat sig inspirera till ”aha-ögonblick” hos många då de kunnat se sitt bästa jag genom hennes personliga historia.
        </p>
        <p>
          Genom att höja upp en alldeles vanlig hudvårdsrutin till en mer upplyst livsstil, visar Indie Lees kollektion att det som är bra för vår planet också är bra för själ och hjärta. Varje produkt kommer med det kraftfulla budskapet från Indie Lee, vackert paketerad för att pryda vilken badrumshylla som helst.
        </p>
      </div>
    </div>

    <div class="about-indie">
      <div class="about-indie-image">
        <img src="/wp-content/uploads/2016/03/cleanser.jpg" alt="About Indie" />
      </div>
      <div class="about-indie-text">
        <h2>En helt ekologisk hudvårdskollektion</h2>
        <p>
          Släpp lös din inre och yttre skönhet tillsammans med Indie Lee och hennes lyxiga, hundra procent naturliga kollektion av ekologiska hudvårdsprodukter som kombinerar stil och hållbarhet utan att göra avkall på något. Produkterna, som består av de finaste naturliga ingredienserna från hela världen, är skapade för att förbättra huden i kropp och ansikte med välgörande grön hudvård.
        </p>
        <p>
          Skäm bort dig själv med den lyxiga känslan och det vackra resultat Indie Lees produkter ger medan du samtidigt hjälper till att skydda planeten. Indie Lees rengöringskrämer, oljor, serum och återfuktare ger dig och din hud välbefinnande medan du samtidigt hjälper till att skydda planeten vi bor på. Produkterna innehåller endast naturliga (och naturligt härledda), GMO-fria ekologiska ingredienser. Resultatet är lätthanterliga produkter som ger din hud något extra.
        </p>
        <p>
          Kollektionen från Indie Lee är helt fri från toxiner och kemikalier och är Leaping Bunny-certifierad (dvs. inte testad på djur i något led av produktionen).
        </p>
      </div>
    </div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'indie-lee' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'indie-lee' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

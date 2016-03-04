<?php
/**
 * Template Name: About Indie Lee
 */
get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main about-indie-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page-about' ); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>

      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>

<script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
<script>
  $(function() {
    var iframe = document.getElementById('aboutVideo');
    // $f == Froogaloop
    var player = $f(iframe);

    $("#videoModal").on("change", function() {
      if ($(this).is(":checked")) {
        $("body").addClass("modal-open");
        player.api('play');
      } else {
        $("body").removeClass("modal-open");
        player.api('pause');
      }
    });

    $(".modal-fade-screen, .modal-close").on("click", function() {
      $(".modal-state:checked").prop("checked", false).change();
    });

    $(".modal-inner").on("click", function(e) {
      e.stopPropagation();
    });
  });
</script>

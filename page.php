<?php
   get_header();
?>
<div id="colorlib-main">
   <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
         <div class="row d-flex">
            <div class="col-xl-8 py-5 px-md-5">
               <div class="row pt-md-4">
                  <h1 class="mb-3"><?php the_title(); ?></h1>
                  <?php
                     if (have_posts()) {
                     	while (have_posts()) {
                     		the_post();
                     		get_template_part('template-parts/content', 'page');
                     	}
                     }
                     ?>
               </div>
            </div>
            <?php
               get_template_part('template-parts/sidebar', 'second');
            ?>
         </div>
      </div>
   </section>
</div>
<!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
   <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
   </svg>
</div>
<?php
   get_footer();
?>
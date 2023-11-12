<div class="col-xl-4 sidebar ftco-animate bg-light pt-5 fadeInUp ftco-animated">
   <div class="sidebar-box pt-md-4">
      <?php
         get_search_form();
         ?>	
   </div>
   <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
      <h3 class="sidebar-heading">Categories</h3>
      <ul class="categories">
         <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> (' . $category->count . ')</li>';
            }
            ?>
      </ul>
   </div>
   <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
      <h3 class="sidebar-heading">Tag Cloud</h3>
      <ul class="tagcloud">
         <?php wp_tag_cloud(); ?>
      </ul>
   </div>
   <?php
      get_header();
      ?>
   <div id="colorlib-main">
      <section class="ftco-section ftco-no-pt ftco-no-pb">
         <div class="container">
            <div class="row d-flex">
               <div class="col-xl-8 py-5 px-md-5">
                  <div class="row pt-md-4">
                     <h1>Page Not Found</h1>
                     <div class="row">
                        <div class="col">
                           <div class="block-27">
                              <?php
                                 the_posts_pagination( );
                                 ?>
                           </div>
                        </div>
                     </div>
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
</div>
<!-- END COLORLIB-PAGE -->
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
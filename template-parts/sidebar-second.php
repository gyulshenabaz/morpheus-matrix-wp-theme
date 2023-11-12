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
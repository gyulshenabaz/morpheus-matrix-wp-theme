<div>
   <h3 class="mb-5 font-weight-bold"> <?php 
      if (!have_comments()) {
          echo "Leave a comment";
      }
      else {
          echo get_comments_number(). " Comments";
      }
      ?> </h3>
   <ul class="comment-list">
      <?php
         wp_list_comments(
             array(
                 'avatar_size' => 50   )   
         );
         ?>
   </ul>
   <!-- END comment-list -->
   <div class="comment-form-wrap pt-5">
      <?php
         if (comments_open()) {
             comment_form(
                 array(
                     'class_form'=>'p-3 p-md-5 bg-light',
                     'class_submit'=>'btn py-3 px-4 btn-primary'
                 )
             );
         }
         ?>
   </div>
</div>
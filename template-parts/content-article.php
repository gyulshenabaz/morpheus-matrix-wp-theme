<p>Published <?php the_date(); ?> </p> <?php the_content(); ?> <div class="tag-widget post-tag-container mb-5 mt-5">
  <div class="tagcloud"> <?php
  // Get the tag list
  $tags = get_tags();

  // Check if there are tags
  if ($tags) {
      // Loop through each tag
      foreach ($tags as $tag) {
          echo '
		<a href="' .
              get_tag_link($tag->term_id) .
              '">' .
              $tag->name .
              "</a>";
      }
  }
  ?> </div>
</div> <?php comments_template(); ?>

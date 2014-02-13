<?php get_header(); ?>

<div class="row">
	
<div class="large-10 centred columns">

   <h1>Search Results</h1>
   
	<?php while (have_posts()) : the_post(); ?>

    <div class="search-results">

		<strong><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></strong>

		<?php the_excerpt() ;?>
	  
   </div> <!-- end search results -->

   <?php endwhile; ?>

	<div class="pagination">
		 <!--<?php wp_simple_pagination(); ?>-->
	</div> <!-- end pagination -->

</div> <!-- end large-10 -->
</div> <!-- end row -->


<?php get_footer(); ?>

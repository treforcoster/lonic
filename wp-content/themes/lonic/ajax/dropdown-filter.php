<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter-2">
	<?php

		//TAXONOMY 1
		if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) : 
 
			echo '<select name="categoryfilter"><option value="">Select Category...</option>';
			foreach ( $terms as $term ) :
				echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
			endforeach;
			echo '</select>';
		endif;

		//TAXONOMY 2
		if( $terms_2 = get_terms( array( 'taxonomy' => 'post_tax', 'orderby' => 'name' ) ) ) : 
  
			echo '<select name="taxonomyfilter"><option value="">Select Taxonomy...</option>';
			foreach ( $terms_2 as $term ) :
				echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
			endforeach;
			echo '</select>';
		endif;
	?>
	<button>Apply filter</button>
	<input type="hidden" name="action" value="myfilter_2">
</form>
<div id="response">
    <?php require 'all-posts.php'; ?>
</div>
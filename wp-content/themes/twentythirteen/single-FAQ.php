<?php
/* Template Name: 'FAQ'  */


	get_header();

	$args = array(
	'post_type' => 'FAQ' 
	); 
	$query = new WP_Query( $args );
	while ($query->have_posts()) : $query->the_post(); 
?>	 
		<h2 dir="rtl"><?=the_title()?> </h2>
		<h4 dir="rtl"><?=the_content() ?></h4>
		<br> 
<?php
	endwhile ; 
		
	get_footer();
?>

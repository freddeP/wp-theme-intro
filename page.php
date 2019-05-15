<?php
get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>  
<div class="container">
    <h1>
    <i>a page template...</i>
    <hr>
       <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
    </h1>
    <p>    
        <?php the_content(); ?> 
    </p>     
</div>


<?php
	} // end while
} // end if
get_footer();
?>


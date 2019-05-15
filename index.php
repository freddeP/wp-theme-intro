<?php

// detta inkludera header.php
get_header();


// kod som generar content baserat på din back end.

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>  
<div class="container">
    <h1>
    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
    </h1>
    <p>    
        <?php the_content(); ?> 
        <i>
       
        </i>
    </p>     
</div>


<?php
	} // end while
} // end if



// inkludera footer.php
get_footer();

?>


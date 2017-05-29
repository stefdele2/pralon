<html>
  


  <?php get_header(); ?>

 <div class="maincontent">
 <div class="container containerfront">

<div class="tagline">
     <?php bloginfo('description'); ?>
    </div>

      <?php wp_nav_menu( array( 'theme_location' => 'frontpage-top-menu', 'container_class' => 'top-menu' ) ); ?>
  <div class="row rowmain clearfix">
  
        <?php

$args = array(
    'posts_per_page' => 6,
    'post_type' => 'praline',
);
$myposts = get_posts( $args );
        

foreach($myposts as $post) {
    setup_postdata($post);

    echo "<div class='col-sm-6 col-md-6 col-lg-4 mainitem'><div class='mainitem2'><a href='";
        echo get_post_permalink( $id, $leavename, $sample ); 
    echo "'>
     <span class = 'text'>";
    echo "<h2>".get_the_title( $post_id)."</h2>";
    echo "</span>";
    the_post_thumbnail('medium', array('class' => ' imgmain'));
    echo "</div> </a></div>";
}

?>
    </div>


</div>
     
     
     <div class="white"></div>
     
     <?php get_footer(); ?>
    </div>




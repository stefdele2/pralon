<?php 
if(have_posts()) 
{
    while(have_posts())
    {
        //Initialize the post
        the_post();
        //Print the title and the content of the current post
?>  

<div class="col-12 deel deeltext">
    <h1><?php the_title(); ?></h1>
    
   <?php the_content();
    
    
    
    
    
    
    ?>
</div>

<div  class="col-md-6 col-sm-12 deel">
<?php 
    
            
            
            
               echo "<div class=' mainitem'><div class='mainitem2'><a href='";
        echo get_post_permalink( $id, $leavename, $sample ); 
    echo "'>
     <span class = 'text'>";
    echo "<h2>Klik hier om verder te lezen.</h2>";
    echo "</span>";
    the_post_thumbnail( 'thumbnail', array( 'class' => 'thumbnailpic' ) );
    echo "</div> </a></div>";
            
            
            
        
            
            
            
 ?>   
    
    
</div>


<?php
    }
}
else
{
    echo 'No content available';
}
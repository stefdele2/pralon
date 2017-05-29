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
    <h1 class="titelnews"><?php the_title(); ?></h1>
    <?php  the_post_thumbnail( 'thumbnail', array( 'class' => 'newsfoto' ) );?>   
   <?php the_content();
    
?>
    
    

    
</div>



<?php
    }
}
else
{
    echo 'No content available';
}
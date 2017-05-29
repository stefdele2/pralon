<?php 
if(have_posts()) 
{
    while(have_posts())
    {
        //Initialize the post
        the_post();
        //Print the title and the content of the current post
?>  









<div class="wrapper col-lg-4 col-md-6">
 
    		<div class="card radius shadowDepth1">
    			<div class="card__image border-tlr-radius">
    				<img src="<?php the_post_thumbnail_url('thumbnail' ); ?> " alt="image" class="border-tlr-radius">
                </div>

    			<div class="card__content card__padding">
                    

    				<div class="card__meta">
    
                        <time><?php echo get_the_date(); ?></time>
    				</div>

    				<article class="card__article">
	    				   <?php 
    echo "<h2><a href='";
    echo  get_post_permalink();  
    echo "'>";
    echo the_title();
    echo "</a></h2>"; ?>

	    				<p> <?php the_excerpt(); ?>
                        
                        
                        
                        </p>
	    			</article>
    			</div>

    			
    		</div>
	
            
    	</div>



<?php
    }
}
else
{
    echo 'No content available';
}
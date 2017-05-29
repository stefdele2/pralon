<?php 
if(have_posts()) 
{
    while(have_posts())
    {
        //Initialize the post
        the_post();
        //Print the title and the content of the current post
?>                   
<h1 class="single_title"><?php the_title(); ?></h1>
<section class="col-8">
  <div class="pralinetag">
      
<?php echo get_post_meta(get_the_ID(), 'pralinetag', true); ?> 
      </div> 
    
    
    

    
    
    
      
        <?php the_content();?>  
 

<?php $hyperlink = get_post_meta(get_the_ID(), 'hyperlink', true);


 
 if ($hyperlink) : ?>

<a href="<?php echo $hyperlink; ?>" class="btn btn-primary">Bekijk website</a>
<?php endif; ?>






</section>

<?php
    }
}
else {
    echo 'No content available';
}


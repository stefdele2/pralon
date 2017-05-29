
    
  <?php get_header(); ?>
     <div class="maincontent css<?php global $post;
echo $post->ID;?>">

<div class="container">

    <div class="pagetitle"> <h1><?php wp_title(''); ?></h1></div>
  <div class="row">
  
    <?php get_template_part('partials/content-minimal'); ?>
        
   
 
      </div>

</div>

<?php get_footer(); ?>
    </div>
    


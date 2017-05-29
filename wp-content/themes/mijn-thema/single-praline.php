
  <?php get_header(); ?>
 <div class="maincontent singlepraline">

<div class="container ">
    
  <div class="row">
    <div class="col-sm-9 col-xs-12">   
    <?php get_template_part('partials/content-praline'); ?>
                        
        
        

        
        
    </div>
   
   <div class="col-sm-3 col-xs-12 lijstrechts">   
       <?php dynamic_sidebar( 'primary-sidebar' ); ?>
       
      </div>
      </div>

</div>
<?php 

if (class_exists('MultiPostThumbnails')) : 

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'secondary-featured-thumbnail');

endif;

 ?>
<?php get_footer(); ?>
</div>

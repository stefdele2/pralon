

  <?php get_header(); ?>
         <div class="maincontent css<?php global $post;
echo $post->ID;?>">

<div class="container">
  <div class="row">
    <div class="col-sm-9 col-xs-12">   
    <div class="row">
    <div class="col-md-6">
     <?php get_template_part('partials/content'); ?>
    </div>
    <div class="col-md-6">
       <?php echo do_shortcode('[contact-form-7 id="96" title="Contact form 1"]') ?>
    </div>
    </div>
  

    </div>
  
      </div>

</div>

<?php get_footer(); ?>
    </div>

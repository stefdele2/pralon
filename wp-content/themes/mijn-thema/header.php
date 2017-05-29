<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Hier staan je eigen links en meta tags -->

    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?<?php echo time();?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
    <!-- of dit voor css: <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/main.css" /> -->
    <?php wp_head(); ?>
</head>
    <script>
jQuery(document).ready(function(){
    $(".kek").click(function(){
        $(".open").toggleClass("schuif");
    });
});
        
        jQuery(function() {
$('.burger-box').click(function(e) {
  e.preventDefault();
  $(this).toggleClass('kek2');
});
});
</script>
<body class="css<?php echo get_post_type(); ?>          css<?php global $post;
echo $post->ID;?>
">


    <div>
        <a href="#" class="burger-box kek burgercss<?php echo $post_type ?> ">
  <div class="burger">
  </div>
        </a></div>
    
    
    <div class="sidebardiv open">


  <div class="navbar-brand" href="#">
      <?php bloginfo('name'); ?>
  </div>
    
    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'side-menu' ) ); ?>
        
        
        <?php dynamic_sidebar( 'mediabuttons' ); 
        
        
        
        if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}?>


</div>

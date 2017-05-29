

  <?php get_header(); ?>
    <div class="maincontent singletext">

<div class="container css<?php global $post;
echo $post->ID;?>">
  <div class="row">
    <div class="col-12">   
    <?php get_template_part('partials/content-news'); ?>
        
        
        
        
            <div id="a" class="linkerpijl">
    
    <?php 
/**
 *  Infinite next and previous post looping in WordPress
 */
        
if( get_adjacent_post(false, '', true) ) { 
    
    
	previous_post_link('%link', ' Vorige Post');
} else { 
    $first = new WP_Query('posts_per_page=1&order=DESC&post_type=post'); $first->the_post();
    	echo '<a id="b" href="' . get_permalink() . ' "> Vorige Post</a>';
  	wp_reset_query();
}; ?>
        <div class="fa fa-arrow-right ico"></div>
        </div>
    
    <div class="rechterpijl">
         <div class="fa fa-arrow-left ico"></div>
        <div class="textrechterpijl">
    <?php
    
if( get_adjacent_post(false, '', false) ) { 
	next_post_link('%link', 'Volgende Post ');
} else { 
	$last = new WP_Query('posts_per_page=1&order=ASC&post_type=post'); $last->the_post();
    	echo '<a href="' . get_permalink() . '">Volgende Post </a>';
    wp_reset_query();
}; ?>
            </div>
    </div>
        
        
        
    </div>
      </div>

    
    
    
    
    
</div> <div class="container css<?php global $post;
echo $post->ID;?>">
<?php comments_template(); ?></div>
<?php get_footer(); ?>
        </div>


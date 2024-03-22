<?php
$featured_service_title = get_sub_field('flexible_service_title');
$featured_posts = get_sub_field('flexible_service_item');
$featured_service_type = get_sub_field('flexible_service_type');
if( $featured_posts ):?>

<div class="flexible-services">
  <div class="container">
    <div class="title">
      <h2><?php echo $featured_service_title;?></h2>
    </div>
    
    <div class="flexible-services_block">
    <?php foreach( $featured_posts as $post ):
    setup_postdata($post);?>

    <?php if ( has_post_thumbnail()) : ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        <div class="content d-flex flex-column">
          <div class="d-flex align-items-center">
            <h4><?php the_title(); ?></h4>
            <i class="fa-solid fa-arrow-right-long"></i>
          </div>
          <p><?php echo $featured_service_type;?></p>
        </div>
      </a>
    <?php endif;?>

    <?php endforeach; 
    wp_reset_postdata();?>
    </div>
  </div>
</div>

<?php
endif;?>
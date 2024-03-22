<?php
$image = get_sub_field('flexible_hero_image');
$title = get_sub_field('flexible_hero_title');
?>
<div class="flexible-hero d-lg-flex align-items-lg-center">
  <div class="flexible-hero_image">
    <img src="<?php echo $image;?>" alt="">
    <?php if( get_sub_field('sale') == 'sale' ): ?>
    <div class="flexible-hero_sale">
      <h2>SALE</h2>
      <h3>now on</h3>
    </div>
    <?php endif; ?>
  </div>
  <div class="content">
    <h1 class="title"><?php echo $title;?></h1>

    <?php if( have_rows('flexible_hero_list') ): ?>
      <ul>
      <?php while ( have_rows('flexible_hero_list') ) : the_row();
        $list_item = get_sub_field('flexible_hero_list_item');
      ;?>
      <li><?php echo $list_item;?></li>
      <?php endwhile; ?>
      </ul>
    <?php endif; ?>

    
    <?php if( have_rows('flexible_hero_buttons') ): ?>
      <div class="action d-flex">
      <?php while ( have_rows('flexible_hero_buttons') ) : the_row();
        $link = get_sub_field('flexible_hero_button_link');
        if( $link ) {
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        }
      ;?>
      <div class="button d-flex align-items-center">
        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
          <?php echo esc_html( $link_title ); ?>
        </a>
      </div>
      <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>
</div>
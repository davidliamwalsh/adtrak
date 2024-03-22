<?php
if( have_rows('flexible_content') ):
	while( have_rows('flexible_content') ): the_row();

		if( get_row_layout() == 'flexible_services' ):
			get_template_part( 'templates/flexible/flexible-services' );

		elseif( get_row_layout() == 'flexible_hero' ):
			get_template_part( 'templates/flexible/flexible-hero' );

		endif;
  endwhile;
else:
	// No flexible content
endif;
?>
<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">

	<?php
	if ( is_active_sidebar( 'sidebar1' ) ) :
		dynamic_sidebar( 'sidebar1' );

	else :
	?>

		<!-- This content shows up if there are no widgets defined in the backend. -->

		<div class="alert help">
			<p><?php _e("Please activate some Widgets.", "scaffoldingtheme");  ?></p>
		</div>

	<?php endif; ?>

</div>
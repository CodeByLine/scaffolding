<?php get_header(); ?>

		<div id="main" class="eightcol first clearfix" role="main">

			<article id="post-not-found" class="hentry clearfix">

				<header class="article-header">

					<h1><?php _e("404 Error - Page Not Found", "scaffoldingtheme"); ?></h1>

				</header> <!-- end article header -->

				<section class="entry-content">

					<p><?php _e("The page you were looking for was not found, but maybe try looking again!", "scaffoldingtheme"); ?></p>

				</section> <!-- end article section -->

				<section class="search">

					<p><?php get_search_form(); ?></p>

				</section> <!-- end search section -->

			</article> <!-- end article -->

		</div> <!-- end #main -->

<?php get_footer();

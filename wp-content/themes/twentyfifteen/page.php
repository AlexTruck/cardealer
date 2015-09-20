<?php
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/styles/cardealer.css">
</head>
<body>

<article>
<header>
  <div id="logo-contact">
     <div id="logo">
       <p><span>CAR</span>DEALER</p>
     </div>
     <div id="contact">
       <p>NEED HELP?</p>
       <br/>
       <p>
         <span>8</span><span>00</span>-<span>2</span><span>345</span>-<span>6</span><span>7</span><span>8</span><span>9</span>
       </p>
       <br/>
       <p>shedule shedule shedule shedule</p>
     </div>
  </div>
</header>
the_post(); 
the_content();
if (strlen($post[3]) == 1)
				$post[3] = '0'.$post[3];
			if (strlen($post[4]) == 1)
				$post[4] = '0'.$post[4];

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

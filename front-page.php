<?php
/**
 * The Front Page Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ofagency
 */

get_header();
?>

<main>
  <section class="intro">
    <h1><?php 
			$ofagency_description = get_bloginfo( 'description', 'display' );
			if ( $ofagency_description || is_customize_preview() ) :
				?>
				<?php echo $ofagency_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<?php endif; ?>
		</h1>
    <p>We empower our partners by providing the right tools, guidance, 
data & support to build their brand and increase their revenue.</p>
  </section>
  
  <section class="secondary">
    <img src="https://source.unsplash.com/ear8VOL7x8k/1400x2200" class="" alt="">
    <div class="stack block-2" style="--stack-space: 2rem;">
      <h2>Empowering Creators <wbr>Every Step of the Way</h2>
      <p>OF AGENCY is a new agency in Los Angeles, California with a strength in marketing, management, discovering opportunities & deep industry knowledge.</p>
      <div class="social">
        <i class="fab fa-snapchat"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <p>We will maximize your potential on every platform. Let our copywriters, designers, and content experts</p>
    </div>
    
  <div class="amarillo stack block-3" style="--stack-space: 2rem;">
    <h2>Data Driven, Market Focused, Design Oriented</h2>
    <div class="flex align-center">
      <i class="ring fas fa-analytics"></i>
      <p>Lorem ipsum dolor sit amet, ut aeque iudicabit his, ad usu eros simul. Cu prima partem dolorem vix. Errem soleat bonorum nec in.</p>
    </div>
    <a class="button" href="#">How To Join</a>
  </div>
</section>
  
  <section class="super-guide">
    <div class="super-guide__form stack" style="--stack-space: 2rem;">
      <h3>Download Our OnlyFans<br>Super Guide Free!</h3>
      <p>Sign up for free access to our Super Guide, tried and true practices to grow we’ve discovered. <a href="#">Learn More</a></p>
      <form class="form-email">
        <input type="text" class="input" value="Enter Your Email">
        <input type="submit" class="button" value="Email Guide" />
      </form>
    </div>
    
    <img src="https://source.unsplash.com/ZvbhojfQ2g4/1200x1600/" class="" alt="">
    
  </section>
  <section class="research">
        
    <img src="https://source.unsplash.com/-ldsHdX28OI/1200x1800/" class="" alt="">
    
    <div class="research-blurb stack" style="--stack-space: 2rem;">
      <h2>Research, Data, & Science to Make More Money Online</h2>
      <p>Sign up for free access to our Super Guide, tried and true practices to grow we’ve discovered. </p>
      <div class="flex align-center">
      <i class="ring fas fa-money-bill"></i>
    <p>Lorem ipsum dolor sit amet, ut aeque iudicabit his, ad usu eros simul. Cu prima partem dolorem vix. Errem soleat bonorum nec in.</p>
    </div>
      <a class="button" href="#">Learn More</a>
    </div>

  </section>
    
    <section class="offer">
        
    
    
    <div class="stack offer-blurb" style="--stack-space: 2rem;">
      <h2>Research, Data, & Science to Make More Money Online</h2>
      <p>Sign up for free access to our Super Guide, tried and true practices to grow we’ve discovered. </p>
      <div class="flex align-center">
      <i class="ring fas fa-money-bill"></i>
    <p>Lorem ipsum dolor sit amet, ut aeque iudicabit his, ad usu eros simul. Cu prima partem dolorem vix. Errem soleat bonorum nec in.</p>
    </div>
      <a class="button" href="#">Learn More</a>
    </div>
    <img src="https://source.unsplash.com/vxMjD4_92g0/1200x1600/" class="" alt="">
  </section>
  
  
</main>



<div class="grid-layout--1 container">
	<main id="primary" class="site-main main-front-page">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

	</main><!-- #main -->

</div>

<?php
get_footer();

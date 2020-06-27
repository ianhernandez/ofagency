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
    <picture>
      <source media="(max-width: 999px)" srcset="https://source.unsplash.com/-ldsHdX28OI/1200x1800 1200w" />
      <source media="(min-width: 1000px)" srcset="https://source.unsplash.com/ear8VOL7x8k/1400x2200 1400w"/>
      <img src="https://source.unsplash.com/-ldsHdX28OI/1200x1800" class="" alt="">
    </picture>
    
    <div class="stack block-2" style="--stack-space: 2rem;">
      <h2>Don't leave money on the table, max your revenue on OnlyFans & beyond</h2>
      <p>Are you an existing creator looking for guidance on gaining, retaining and maximizing your subscriptions? Are you new and looking to jump head first into being your own boss? We're here to help you cut through all the noise and provide the best guidance at whatever stage you're at in your career.</p>
      
      <div class="social">
      <svg id="Group_13" data-name="Group 13" xmlns="http://www.w3.org/2000/svg" width="223.526" height="56.375" viewBox="0 0 223.526 56.375">
        <path id="Path_27" data-name="Path 27" d="M872.51,1153.325c.267-.113.33-.4.465-.6a22.441,22.441,0,0,1,2.739-3.419,57.827,57.827,0,0,1,6.294-5.6,54.662,54.662,0,0,1,9.278-5.814,59.218,59.218,0,0,1,8.252-3.35,68.869,68.869,0,0,1,7.644-2c1.8-.353,3.629-.59,5.46-.782a70.549,70.549,0,0,1,7.724-.284,19.474,19.474,0,0,1,4.283.472,9.717,9.717,0,0,1,4,1.694,5.008,5.008,0,0,1,2.184,3.456,4.3,4.3,0,0,1-.242,1.942,36.058,36.058,0,0,1-2.542,5.126c-1.145,2.032-2.408,3.992-3.7,6.04a9.975,9.975,0,0,0,1.291-.008,32.514,32.514,0,0,1,3.9-.134c1.019-.018,2.037.009,3.056-.016a3.2,3.2,0,0,1,3.382,2.333,1.578,1.578,0,0,0,.095.2,12.565,12.565,0,0,1,3.579-1.038,9.775,9.775,0,0,1,3.244.053,3.81,3.81,0,0,1,2.925,2.952,7.685,7.685,0,0,1-.148,4.795c.437.3.959.334,1.383.59.283.17.586.308.86.491.469.314.492.457.16.919-.647.9-1.306,1.792-1.958,2.687a54.886,54.886,0,0,0-4.943,7.74,6.184,6.184,0,0,0-.6,1.8c-.154.984.413,1.429,1.354,1.091a5.133,5.133,0,0,0,1.626-.981,39.882,39.882,0,0,0,3.335-3.277,151.952,151.952,0,0,0,9.9-12.469,13.087,13.087,0,0,0,1.542-3.469,8.686,8.686,0,0,0,.557-2.611c.014-.332.172-.367.445-.384a3.644,3.644,0,0,1,2.582.985,2.8,2.8,0,0,1,1,2.569,11.058,11.058,0,0,1-.988,3.29c-.611,1.56-1.465,3.006-2.215,4.5a1.819,1.819,0,0,0-.287.788,10.683,10.683,0,0,0,1.322-1.479,65.53,65.53,0,0,1,5.565-6.05,22.428,22.428,0,0,1,5.141-3.845,5.948,5.948,0,0,1,3.456-.764,2.385,2.385,0,0,1,2.189,1.748,5.575,5.575,0,0,1,.025,3.41,18.757,18.757,0,0,1-2.015,4.272c-1.914,3.173-4.184,6.1-6.291,9.145a11.578,11.578,0,0,0-1.836,3.408,2.514,2.514,0,0,0-.108.407.772.772,0,0,0,.758.9,2.484,2.484,0,0,0,1.812-.681,27.684,27.684,0,0,0,3.709-3.493c1.041-1.16,2.065-2.333,3.06-3.532,1.793-2.16,3.492-4.391,5.16-6.646.658-.891,1.289-1.8,1.976-2.672a1.138,1.138,0,0,0,.226-1.041,27.474,27.474,0,0,1-.5-3.564,6.5,6.5,0,0,1,1.392-4.558,8.359,8.359,0,0,1,4.052-2.955,6.032,6.032,0,0,1,2.288-.367,2.117,2.117,0,0,1,.354.021c.765.186,1.334.682.856,1.676a7.71,7.71,0,0,1-1.03,1.347,18.677,18.677,0,0,0-1.454,2.085,5.55,5.55,0,0,0-.776,2.756,23.7,23.7,0,0,0,.487,4.7c.442,2.405.989,4.789,1.455,7.188a21.73,21.73,0,0,1,.317,5.354,14.67,14.67,0,0,1-.244,1.54c.308.1.438-.135.594-.279.85-.79,1.6-1.677,2.369-2.541a144.911,144.911,0,0,0,8.97-11.661c.192-.266.359-.554.758-.566.542-.016.8.311.61.813a2.021,2.021,0,0,1-.258.421c-1.525,2.126-2.91,4.349-4.463,6.456-1.5,2.031-3.05,4.018-4.682,5.944a36.617,36.617,0,0,1-4.666,4.642,19.653,19.653,0,0,1-4.514,2.887,7.566,7.566,0,0,1-2.876.68,9.154,9.154,0,0,1-2.816-.21,5.144,5.144,0,0,1-3.834-3.851,5.223,5.223,0,0,1-.144-2.23c.1-.543.473-1.007.848-1.017.406-.012.795.474.849,1.07a7.793,7.793,0,0,0,.113,1.05,2.839,2.839,0,0,0,2.554,2.414,3.848,3.848,0,0,0,2.966-.559,3.443,3.443,0,0,0,1.136-1.5,9.406,9.406,0,0,0,.755-3.43c.036-1.086.046-2.176,0-3.261-.046-1.009-.153-2.018-.289-3.021-.206-1.513-.46-3.02-.694-4.529-.018-.115-.024-.238-.178-.312a18.015,18.015,0,0,0-1.48,2.028q-2.979,4.268-6.271,8.3a48.025,48.025,0,0,1-6.187,6.611,12.644,12.644,0,0,1-3.145,2.143,3.776,3.776,0,0,1-2.5.214,3.483,3.483,0,0,1-2.528-2.78,7.629,7.629,0,0,1,.334-4.308,21.331,21.331,0,0,1,2.1-4.238,71.087,71.087,0,0,1,5.056-7.076c.755-.964,1.443-1.981,2.153-2.98a8.083,8.083,0,0,0,.736-1.369c.148-.329.292-.687.031-1a1,1,0,0,0-.993-.235,3.576,3.576,0,0,0-1.293.551,19.55,19.55,0,0,0-3.547,3.034q-1.909,2-3.667,4.135c-1.6,1.927-3.121,3.908-4.651,5.886-2.193,2.838-4.338,5.714-6.628,8.475a12.087,12.087,0,0,1-1.6,1.7,1.223,1.223,0,0,1-1.183.249,3.868,3.868,0,0,1-2.028-1.223c-.407-.478-.424-.563-.081-1.117.631-1.024,1.276-2.038,1.9-3.064,1.1-1.81,2.23-3.609,3.285-5.447.429-.747.935-1.448,1.316-2.221a2.526,2.526,0,0,0,.273-.7c-.778.988-1.553,1.977-2.335,2.962q-1.848,2.329-3.828,4.55a39.386,39.386,0,0,1-3.967,3.949,13.032,13.032,0,0,1-2.887,2.029,3.843,3.843,0,0,1-2.143.311,3.045,3.045,0,0,1-2.521-2.531,7.145,7.145,0,0,1-.135-1.7,5.41,5.41,0,0,0-1.035,1.161,9.214,9.214,0,0,1-3.778,2.79,5.442,5.442,0,0,1-5.548-1.153,6.372,6.372,0,0,1-2.171-4.013,12.537,12.537,0,0,1,.756-6.308,26.581,26.581,0,0,1,4.254-7.612,24.844,24.844,0,0,1,3.2-3.485,20.3,20.3,0,0,1,3.5-2.517,1.959,1.959,0,0,0,.239-.2,5.913,5.913,0,0,0-2.327-.628c-1.989-.088-3.974.046-5.957.156-1.246.068-2.485.269-3.728.411a1.042,1.042,0,0,0-.8.483q-2.881,4.2-5.8,8.375-2.583,3.676-4.961,7.486a53.889,53.889,0,0,0-4.845,9.252,12.522,12.522,0,0,0-.854,4.482,6.487,6.487,0,0,1-.089,1.267c-.233,1.2-1,1.311-1.888,1.03a3.32,3.32,0,0,1-1.669-1.268,7.138,7.138,0,0,1-1.359-4.012,12.869,12.869,0,0,1,1.4-5.987,50.977,50.977,0,0,1,5.078-8.309c2.375-3.292,4.984-6.4,7.456-9.618.3-.392.6-.788.9-1.178a.436.436,0,0,0,.117-.414,2.792,2.792,0,0,0-1.411.3,41.558,41.558,0,0,0-10.993,4.932,17.12,17.12,0,0,0-3.556,2.9,9.192,9.192,0,0,0-.753.937,2.019,2.019,0,0,0-.369,1.049c-.039.639-.457.88-1.029.6a3.1,3.1,0,0,1-1.643-2.114,4.648,4.648,0,0,1,1.267-4.479,16.751,16.751,0,0,1,5.8-3.973,40.415,40.415,0,0,1,6.937-2.358,59.587,59.587,0,0,1,6.37-1.266,17.081,17.081,0,0,1,2.1-.281c.4,0,.557-.343.741-.6.742-1.033,1.479-2.072,2.181-3.133a52.32,52.32,0,0,0,3.362-5.725,15.785,15.785,0,0,0,.851-2.091,5.373,5.373,0,0,0,.078-2.863,2.741,2.741,0,0,0-1.442-1.832,6.848,6.848,0,0,0-3.135-.747,39.884,39.884,0,0,0-6.158.307,47.721,47.721,0,0,0-6.658,1.272c-1.055.271-2.093.608-3.139.9-.778.217-1.553.523-2.32.816a63.874,63.874,0,0,0-6.828,3.057,58.97,58.97,0,0,0-8.928,5.714,53.284,53.284,0,0,0-6.042,5.351,25.484,25.484,0,0,0-4.033,5.265,5.019,5.019,0,0,0-.806,2.385.785.785,0,0,1-.557.741,2.881,2.881,0,0,1-1.691-.407,4.821,4.821,0,0,1-1.287-1.1,3.222,3.222,0,0,1-.5-3.741A4.774,4.774,0,0,0,872.51,1153.325Zm54.953,19.586a7.093,7.093,0,0,0,.166,2.072,1.7,1.7,0,0,0,1.75,1.359,3.7,3.7,0,0,0,2.007-.593,17.762,17.762,0,0,0,4.2-3.973c1.318-1.575,2.48-3.265,3.648-4.952.188-.271.491-.517.546-.811.06-.323-.354-.513-.53-.786-.394-.609-.405-.593.084-1.133a17.721,17.721,0,0,0,2.948-4.386,6.091,6.091,0,0,0,.532-3.514c-.141-.986-.613-1.538-1.5-1.6a6.25,6.25,0,0,0-3.4.786,13.638,13.638,0,0,0-3.138,2.406,23.912,23.912,0,0,0-3.457,4.466,30.292,30.292,0,0,0-3.067,6.636A11.642,11.642,0,0,0,927.464,1172.911Z" transform="translate(-780.604 -1131.467)"/>
        <path id="Path_28" data-name="Path 28" d="M759,1172.582a20.291,20.291,0,1,1-20.252-20.393A20.244,20.244,0,0,1,759,1172.582Zm-2.132-.014a18.157,18.157,0,1,0-18.208,18.2A18.194,18.194,0,0,0,756.865,1172.568Z" transform="translate(-718.415 -1139.88)"/>
        <path id="Path_29" data-name="Path 29" d="M818.226,1192.726h-2.584c-.13-.177-.057-.371-.058-.551-.01-5.507.033-11.015-.042-16.521a8.4,8.4,0,0,0-2.476-6.037,7.837,7.837,0,0,0-4.647-2.136,9.576,9.576,0,0,0-4.858.563,8.93,8.93,0,0,0-5.609,6.581,11.786,11.786,0,0,0-.3,2.875q.018,7.269.006,14.536v.675c-.841.1-1.661,0-2.523.053v-27.091h2.513v4.762c.535-.606.951-1.253,1.454-1.835a10.084,10.084,0,0,1,5.862-3.388,12.168,12.168,0,0,1,6.687.477,9.61,9.61,0,0,1,6.189,7.217,15.123,15.123,0,0,1,.383,3.575C818.227,1181.869,818.226,1187.257,818.226,1192.726Z" transform="translate(-749.564 -1145.063)"/>
        <path id="Path_30" data-name="Path 30" d="M870.659,1167.382a4.784,4.784,0,0,1-.533,1.146,3.221,3.221,0,0,0,.5,3.741,4.821,4.821,0,0,0,1.287,1.1,2.884,2.884,0,0,0,1.691.407q2.625,5.657,5.249,11.314c.793,1.711,1.578,3.426,2.385,5.18a2.757,2.757,0,0,0,.451-.962q3.969-9.854,7.91-19.72c.408-1.02.821-2.038,1.219-3.062.112-.287.239-.447.6-.429.777.037,1.557.011,2.32.011.119.171.018.278-.034.4q-5.518,13.265-11.031,26.531a26.251,26.251,0,0,1-2.447,4.895,10.417,10.417,0,0,1-2.118,2.36,7.264,7.264,0,0,1-4.139,1.578,12.233,12.233,0,0,1-5.79-.969c-.294-.129-.343-.243-.235-.509.257-.626.5-1.256.773-1.932a12.724,12.724,0,0,0,2.225.771,9.963,9.963,0,0,0,3.445.122,5.232,5.232,0,0,0,3.307-2.121,18.673,18.673,0,0,0,2.205-3.908c.137-.3-.008-.449-.1-.633q-2.554-5.348-5.129-10.687-3.737-7.779-7.471-15.558l-.166-.342c.993,0,1.924,0,2.855,0,.2,0,.257.157.324.319C870.348,1166.752,870.509,1167.064,870.659,1167.382Z" transform="translate(-778.753 -1145.524)"/>
        <path id="Path_31" data-name="Path 31" d="M850.369,1146.334h2.5v38.834h-2.5Z" transform="translate(-771.987 -1137.503)"/>
        <path id="Path_32" data-name="Path 32" d="M746.532,1190.476a8.427,8.427,0,0,1-4.394-.858,8.179,8.179,0,0,1-4.618-6.207,25.892,25.892,0,0,1-.113-3.53,1.856,1.856,0,0,1,.48-1.078,2.891,2.891,0,0,0,.5-1.868,7.142,7.142,0,0,1,.422-3.193,7.465,7.465,0,0,1,6.33-4.849,13.617,13.617,0,0,1,3.319.033,6.85,6.85,0,0,1,3.292,1.356,7.464,7.464,0,0,1,3.134,6.161,2.936,2.936,0,0,1,0,.354,3.046,3.046,0,0,0,.584,2.262,1.7,1.7,0,0,1,.3,1.134c-.024.731-.023,1.464-.008,2.2a7.225,7.225,0,0,1-1.471,4.47,7.979,7.979,0,0,1-2.2,2.17,8.582,8.582,0,0,1-4.707,1.448C747.1,1190.473,746.816,1190.476,746.532,1190.476Zm.11-12.48h4.19c.692,0,.634.057.636-.659,0-.355.009-.709,0-1.063a4.182,4.182,0,0,0-3.378-3.98,9.193,9.193,0,0,0-2.4-.082,4.124,4.124,0,0,0-3.68,2.765,7.131,7.131,0,0,0-.211,2.521c-.014.487.008.5.514.5C743.755,1178,745.2,1178,746.643,1178Zm2.283,5.358a2.2,2.2,0,0,0-1.429-2.176,2.318,2.318,0,0,0-2.169,4.073.8.8,0,0,1,.45.853c-.023.47,0,.943,0,1.414a.693.693,0,0,0,.418.677.849.849,0,0,0,1.288-.774c.021-.447.017-.9,0-1.343a.788.788,0,0,1,.4-.806A2.051,2.051,0,0,0,748.926,1183.354Z" transform="translate(-726.124 -1146.626)"/>
      </svg>

        <i class="fab fa-snapchat"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-reddit"></i>
        <i class="fab fa-twitch"></i>
      </div>
      
    </div>
    
  <div class="amarillo stack block-3" style="--stack-space: 2rem;">
    <h2>It may feel scary, but you don't need to go it alone</h2>
    <p>Always there for you when you need it. Based out of sunny Los Angeles, California, we're an experienced team of marketers, influencers & go-getters working in the modeling industry since the dawn of Instagram.</p>
    <p>Having successfully launched a modeling group with over half a million followers, with some of our models surpassing 1 million followers, we know what it takes to navigate this provocative market. We will provide you with guidance, resources and tools to make more passive money efficiently.</p>
    <a class="button" href="/apply">Get Started</a>
  </div>
</section>
  
</main>



<div class="container">
	<main id="primary" class="site-main main-front-page">
  <?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

        the_content(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ofagency' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            wp_kses_post( get_the_title() )
          )
        );
    

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>


	</main><!-- #main -->

</div>

<?php
get_footer();

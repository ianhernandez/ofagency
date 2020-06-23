<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ofagency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ofagency' ); ?></a>

	<header id="masthead" class="site-header header">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<svg xmlns="http://www.w3.org/2000/svg" width="522.06" height="79.258" viewBox="0 0 522.06 79.258">
					<title><?php bloginfo( 'name' ); ?></title>
					<g id="OF_ANGENCY" data-name="OF ANGENCY" transform="translate(99.952 14.677)">
						<path id="Path_1" data-name="Path 1" d="M492.339,844.75a8.256,8.256,0,1,0-12.182,7.264l-4.644,26.021h17.222l-4.651-26.064A8.252,8.252,0,0,0,492.339,844.75Z" transform="translate(-543.208 -813.454)" fill="#666"/>
						<path id="Path_2" data-name="Path 2" d="M513.323,807.591a24.639,24.639,0,0,0-30.939-6.728l5.859-5.426.734-4.705.777,3.306.64-.592,8.375-7.757a21.577,21.577,0,0,0-26.313,18.543,21.577,21.577,0,0,0-26.312-18.543l8.375,7.757.64.592.777-3.306.733,4.705,5.859,5.426a24.638,24.638,0,0,0-30.938,6.728l10.134.64,4.021-3.543-.239,3.782,7.115.449,4.2-5.218v5.483l13.164.831a24.632,24.632,0,0,0-24.3,31.053l8.01-9.3-.026-7.022,2.3,4.379,6.118-7.1-.071-7.2,3.566,3.139,6.725-7.806h0c-.118-.2-.247-.39-.37-.586l.434.4c.037-.25.062-.5.09-.75.029.25.053.5.091.75l.434-.4c-.123.2-.253.387-.371.586h0l6.724,7.806,3.566-3.139-.071,7.2,6.118,7.1,2.3-4.379-.026,7.022,8.01,9.3a24.632,24.632,0,0,0-24.3-31.053l13.164-.831V803.7l4.2,5.218,7.115-.449-.239-3.782,4.021,3.543Z" transform="translate(-531.54 -799.81)" fill="#666"/>
						<path id="Path_12" data-name="Path 12" d="M834.59,717.459c-.152,1.5-.29,3.005-.46,4.505a23.212,23.212,0,0,1-2.347,7.7,22.236,22.236,0,0,1-8.286,9.22,22.719,22.719,0,0,1-8.045,3.089,26.8,26.8,0,0,1-8.888.188,28.51,28.51,0,0,1-4.343-.984,20.264,20.264,0,0,1-6.978-3.847,23.265,23.265,0,0,1-7.054-10.67,27.129,27.129,0,0,1-1.4-8.913,26.108,26.108,0,0,1,2.068-10.406,22.109,22.109,0,0,1,7.845-9.491,25.268,25.268,0,0,1,8.493-3.706,29.242,29.242,0,0,1,9.68-.66,20.625,20.625,0,0,1,11.569,4.619,20.07,20.07,0,0,1,4.576,5.531,26.346,26.346,0,0,1,2.788,7.385A40.578,40.578,0,0,1,834.59,717.459Zm-7.29,3.1c-.076-1.375-.125-2.754-.232-4.126a32.125,32.125,0,0,0-2.451-10.269,21.4,21.4,0,0,0-6.22-8.564,13.26,13.26,0,0,0-6.188-2.858,15.852,15.852,0,0,0-6.526.253,13.248,13.248,0,0,0-5.721,3.078,17.982,17.982,0,0,0-5.176,9.442,27.663,27.663,0,0,0-.757,6.342,37.5,37.5,0,0,0,.46,7.028,33.687,33.687,0,0,0,2.554,8.245,24.04,24.04,0,0,0,6.137,8.364,14.781,14.781,0,0,0,13.473,3.328,11.194,11.194,0,0,0,6.668-4.565,19.557,19.557,0,0,0,3.228-7.876A37.917,37.917,0,0,0,827.3,720.563Z" transform="translate(-786.789 -692.182)" fill="#666"/>
						<path id="Path_13" data-name="Path 13" d="M1098.381,722.24a116.794,116.794,0,0,1,13.24-.006,2.67,2.67,0,0,1-.281.168,5.072,5.072,0,0,0-3.261,4.629c-.033.458-.037.918-.038,1.378q0,6.042-.006,12.083a2.609,2.609,0,0,1-.223,1.107c-.389-.661-.746-1.344-1.174-1.979a8.548,8.548,0,0,0-2.825-2.743c-.827-.472-1.019-.452-1.684.238a19.534,19.534,0,0,1-4.252,3.477,15.93,15.93,0,0,1-7.167,2.109,26,26,0,0,1-7.646-.739,20.451,20.451,0,0,1-13.8-11.221,28.417,28.417,0,0,1-2.692-12.794,25.55,25.55,0,0,1,1.385-8.51,22.137,22.137,0,0,1,4.409-7.486,23.511,23.511,0,0,1,7.663-5.617,27.666,27.666,0,0,1,5.586-1.894,29.32,29.32,0,0,1,5.386-.689,31.889,31.889,0,0,1,5.587.3,28.013,28.013,0,0,1,6.808,1.754c1.295.533,2.525,1.219,3.795,1.815a.852.852,0,0,1,.472.931c-.018,1.541-.028,3.082-.04,4.623-.011,1.405-.016,2.811-.03,4.217,0,.255-.033.51-.051.765l-.161.032c-.243-.436-.481-.874-.73-1.306a24.729,24.729,0,0,0-9.2-9.592,16.762,16.762,0,0,0-8.511-2.354c-5.5.075-9.875,2.322-12.682,7.205a22.151,22.151,0,0,0-2.513,7.385,36.5,36.5,0,0,0-.221,9.938,27.6,27.6,0,0,0,4.447,13.041,18.3,18.3,0,0,0,8.438,6.968,14.5,14.5,0,0,0,9.239.7,9.161,9.161,0,0,0,6.79-6.343,16.733,16.733,0,0,0,.685-7.12,4.377,4.377,0,0,0-2.175-3.258,20,20,0,0,0-2.264-1.059C1098.6,722.348,1098.511,722.3,1098.381,722.24Z" transform="translate(-868.724 -692.294)" fill="#dedede"/>
						<path id="Path_14" data-name="Path 14" d="M1030.981,694.319a80.037,80.037,0,0,1,11.847-.021,2.179,2.179,0,0,1-.4.247,6.8,6.8,0,0,0-4.618,4.811,14.492,14.492,0,0,0-.438,4.092q-.009,18.858,0,37.714v1.117l-.182.083a3.538,3.538,0,0,1-.4-.389q-3.735-4.953-7.461-9.912-6.486-8.615-12.976-17.228-4.243-5.636-8.488-11.269a7.161,7.161,0,0,0-1.224-1.278.733.733,0,0,0-1.221.259,3.427,3.427,0,0,0-.39,1.219,23.069,23.069,0,0,0-.113,2.429q-.01,12.935,0,25.872a14,14,0,0,0,.389,4.02,7.422,7.422,0,0,0,3.511,4.564c.765.433,1.593.755,2.372,1.117-.523.205-12.4.262-13.439.031.691-.3,1.328-.535,1.934-.837a7.725,7.725,0,0,0,4.362-6.65c.07-.724.059-1.458.059-2.188q.006-13.1,0-26.2a20.691,20.691,0,0,0-.392-4.917c-.642-2.64-1.807-4.911-4.31-6.27-.353-.192-.71-.375-1.2-.635a3.419,3.419,0,0,1,.557-.12c3.169-.005,6.339.006,9.509-.013a1.4,1.4,0,0,1,1.216.654q3.593,4.806,7.2,9.6,6.084,8.106,12.17,16.211,2.532,3.37,5.084,6.726a5.307,5.307,0,0,0,.955.986c.674.519,1.216.342,1.484-.45a3.208,3.208,0,0,0,.164-.868c.033-.729.043-1.46.043-2.189q.006-10.828.005-21.655a11.51,11.51,0,0,0-.622-4.221,6.9,6.9,0,0,0-4.429-4.2C1031.4,694.516,1031.262,694.444,1030.981,694.319Z" transform="translate(-848.57 -692.364)" fill="#dedede"/>
						<path id="Path_15" data-name="Path 15" d="M1236.841,742.349c-.119-.135-.249-.262-.357-.406q-12.508-16.615-25.013-33.233-2-2.656-4.006-5.306a6.137,6.137,0,0,0-.924-1.016c-.631-.525-1.146-.4-1.491.332a3.332,3.332,0,0,0-.308,1.078c-.072.779-.106,1.565-.107,2.349q-.011,12.976,0,25.952a14.039,14.039,0,0,0,.377,3.94,7.425,7.425,0,0,0,3.552,4.625c.748.419,1.553.737,2.376,1.121a1.239,1.239,0,0,1-.358.129c-.46.018-.921.015-1.381.015q-5.364,0-10.728,0a2.148,2.148,0,0,1-.918-.168c.631-.271,1.279-.51,1.892-.818a7.742,7.742,0,0,0,4.31-6.518,18.722,18.722,0,0,0,.065-2.025q0-13.341,0-26.682a19.381,19.381,0,0,0-.4-4.754c-.7-2.808-1.969-5.2-4.785-6.444a6.143,6.143,0,0,1-.723-.477c.39-.028.621-.059.852-.059,3.007,0,6.014.014,9.021-.014a1.669,1.669,0,0,1,1.493.757q9.447,12.626,18.922,25.231,2.7,3.6,5.43,7.176a5.39,5.39,0,0,0,1.012,1.043c.648.487,1.176.309,1.432-.443a3.447,3.447,0,0,0,.18-.947c.036-.755.043-1.513.043-2.27q0-10.745.005-21.491a11.625,11.625,0,0,0-.637-4.3,6.927,6.927,0,0,0-4.376-4.153c-.159-.057-.308-.142-.518-.241.619-.286,5.53-.376,10.983-.237a6.818,6.818,0,0,1,.744.1l.009.174c-.161.07-.318.15-.483.209a6.866,6.866,0,0,0-4.491,4.742,14.249,14.249,0,0,0-.445,4.091q-.012,18.9-.006,37.792c0,.366-.018.733-.028,1.1Z" transform="translate(-907.084 -692.363)" fill="#dedede"/>
						<path id="Path_16" data-name="Path 16" d="M1137.723,741.807c.51-.209,1.039-.382,1.527-.635a4.889,4.889,0,0,0,2.735-3.959,10.77,10.77,0,0,0,.1-1.292q.008-18-.014-36a8.4,8.4,0,0,0-.4-2.464,4.575,4.575,0,0,0-2.857-2.8c-.148-.062-.3-.122-.438-.2-.031-.016-.031-.093-.073-.247.3-.025.578-.067.859-.068q15.683,0,31.365,0c.839,0,.958.1,1.137.931q.873,4.074,1.74,8.15c.083.385.178.766.268,1.149l-.158.075c-.148-.167-.307-.325-.442-.5a25.36,25.36,0,0,0-7.74-6.926,15.352,15.352,0,0,0-5.507-1.809,88.121,88.121,0,0,0-10.544-.374c-.67-.011-.753.1-.779.744-.013.324,0,.649,0,.973v18.812c0,.216-.006.433,0,.649.028.622.093.711.715.708a43.841,43.841,0,0,0,4.547-.078,9,9,0,0,0,7.506-4.956c.119-.23.261-.449.427-.733.2.736.227,11.456.033,12.469-.185-.3-.333-.515-.446-.742a8.811,8.811,0,0,0-7.591-5.046c-1.426-.124-2.867-.1-4.3-.115-.8-.01-.888.084-.889.887,0,5.622-.019,11.244.018,16.866a10.027,10.027,0,0,0,.39,3.038,3.882,3.882,0,0,0,3.636,2.974,57.586,57.586,0,0,0,7.226-.032,16.969,16.969,0,0,0,7.946-2.8,33.1,33.1,0,0,0,7.109-5.987c.544-.627,1.032-1.3,1.658-2.1a3.7,3.7,0,0,1-.005.668q-.761,3.228-1.541,6.451c-.321,1.337-.653,2.672-.964,4.011a.533.533,0,0,1-.553.481c-.216.005-.433.008-.65.008q-16.983,0-33.966,0c-.361,0-.723-.028-1.084-.042Z" transform="translate(-889.559 -692.414)" fill="#dedede"/>
						<path id="Path_17" data-name="Path 17" d="M1303.4,706.631c-.209-.368-.42-.733-.627-1.1a21.979,21.979,0,0,0-9.924-9.356,16.411,16.411,0,0,0-10.748-1.391,14.428,14.428,0,0,0-9.979,7.609,22.715,22.715,0,0,0-2.374,7.182,30.073,30.073,0,0,0,.105,10.4,21.846,21.846,0,0,0,7.577,13.3,19.577,19.577,0,0,0,8.06,3.993,20.134,20.134,0,0,0,6.523.531,15.871,15.871,0,0,0,12.1-6.63c.091-.127.192-.248.385-.495,0,.249.038.374,0,.461a18.43,18.43,0,0,1-10.4,9.794,18.766,18.766,0,0,1-5.786,1.147c-1,.04-2.006.066-3.005.016a22.416,22.416,0,0,1-15.516-6.928,24.064,24.064,0,0,1-5.729-9.754,26,26,0,0,1-.861-11.219,26.3,26.3,0,0,1,1.443-5.959,21.546,21.546,0,0,1,3.988-6.625,23.142,23.142,0,0,1,8.675-6.108,27.882,27.882,0,0,1,6.79-1.817,33.971,33.971,0,0,1,9.874.1,24.986,24.986,0,0,1,8.864,2.971,1.477,1.477,0,0,1,.842,1.489c-.054,2.486-.038,4.973-.047,7.46,0,.292,0,.584,0,.876Z" transform="translate(-926.23 -692.188)" fill="#dedede"/>
						<path id="Path_18" data-name="Path 18" d="M896.686,704.406c-.776-.962-1.534-1.938-2.332-2.882a18.292,18.292,0,0,0-7.815-5.468A18.843,18.843,0,0,0,880.977,695c-2.921-.143-5.848-.127-8.774-.172a3.707,3.707,0,0,0-.532.065c-.2.651-.224,20.936-.029,21.753a3.683,3.683,0,0,0,.525.073c1.6-.006,3.2.05,4.793-.046a9.014,9.014,0,0,0,8.119-5.289c.07-.143.13-.289.221-.493.3.255.221.559.223.823.009,1.568,0,3.136,0,4.7q0,3.081,0,6.163a2.117,2.117,0,0,1-.2.976c-.15-.294-.3-.588-.449-.884a8.587,8.587,0,0,0-7.4-5.042c-1.724-.139-3.463-.09-5.2-.118a6.366,6.366,0,0,0-.706.075c-.023.344-.061.657-.061.97,0,5.866.035,11.732-.016,17.6-.029,3.3,1.469,4.787,4.161,5.626-.251.266-.552.187-.816.188-1.788.009-3.575.005-5.364.005q-3.738,0-7.477,0c-.3,0-.609-.037-.961-.061.8-.421,1.532-.743,2.2-1.174a4,4,0,0,0,1.785-3.038,17.061,17.061,0,0,0,.108-2.022q.01-17.679-.007-35.359a11.159,11.159,0,0,0-.283-2.725,4.383,4.383,0,0,0-2.872-2.972c-.142-.057-.279-.124-.542-.242a2.168,2.168,0,0,1,.5-.225,7.208,7.208,0,0,1,.812-.019H893.3c1.174,0,1.207-.007,1.491,1.153.4,1.651.75,3.315,1.124,4.973.267,1.184.542,2.366.81,3.55.04.176.065.356.1.535Z" transform="translate(-808.535 -692.413)" fill="#dedede"/>
						<path id="Path_19" data-name="Path 19" d="M977.009,741.1c-.767.213-15.232.225-16.059.018.5-.228.929-.406,1.344-.617a3.606,3.606,0,0,0,1.883-4.645c-.555-1.829-1.255-3.615-1.905-5.415-.933-2.586-1.886-5.166-2.817-7.752-.333-.926-.316-.936-1.322-.936q-6.989,0-13.978,0c-.915,0-.924.018-1.235.839-1.356,3.58-2.727,7.154-4.068,10.738a8.463,8.463,0,0,0-.619,4.039,3.912,3.912,0,0,0,2.482,3.244c.405.183.837.308,1.3.474a87.571,87.571,0,0,1-10.951.028c.241-.1.395-.172.55-.234a9.446,9.446,0,0,0,4.1-3.444,23.383,23.383,0,0,0,2.638-5.355q2.2-5.653,4.411-11.3,2.013-5.161,4.02-10.325,1.864-4.786,3.725-9.572,1.556-3.995,3.114-7.987c.136-.351.282-.7.484-1.2a3.155,3.155,0,0,1,.444.594c1.22,3.112,2.424,6.23,3.638,9.344q2.028,5.2,4.066,10.392,1.868,4.784,3.73,9.57,2.369,6.063,4.741,12.126a18.793,18.793,0,0,0,1.91,4.005A8.2,8.2,0,0,0,977.009,741.1Zm-18.338-20.326c-.07-.277-.11-.515-.19-.738-.486-1.37-.985-2.736-1.472-4.105-1.029-2.892-2.028-5.794-3.092-8.672a24.753,24.753,0,0,0-1.519-3.384c-.687-1.243-1.377-1.245-2.021,0a45.027,45.027,0,0,0-1.935,4.347c-1.415,3.638-2.783,7.3-4.14,10.955a3.21,3.21,0,0,0-.47,1.737C944.721,721.118,957.989,721.01,958.671,720.773Z" transform="translate(-829.039 -691.699)" fill="#dedede"/>
						<path id="Path_20" data-name="Path 20" d="M1323.74,694.308c.756-.284,14.12-.2,14.865.117a2.051,2.051,0,0,1-.234.129c-2.06.8-2.487,2.675-1.838,4.558a18.519,18.519,0,0,0,1.528,3.027q3.9,6.862,7.835,13.7a9.5,9.5,0,0,0,.6.96,1.391,1.391,0,0,0,2.476.089,6.459,6.459,0,0,0,.679-1.006q3.674-6.57,7.329-13.15a12.145,12.145,0,0,0,1.31-3.382,3.823,3.823,0,0,0-2.64-4.8.568.568,0,0,1-.336-.328,4.981,4.981,0,0,1,.644-.114c3.637-.172,9.611-.057,10.181.2-.047.064-.078.158-.137.181a14.576,14.576,0,0,0-7.187,6.522c-1.451,2.433-2.789,4.932-4.167,7.407s-2.744,4.956-4.111,7.438a13.894,13.894,0,0,0-1.843,6.635c-.042,4.594-.006,9.189-.06,13.782a5.233,5.233,0,0,0,3.99,5.331c.117.038.234.081.409.144-.643.233-14.145.287-15.224.059.479-.2.858-.343,1.23-.506a4.816,4.816,0,0,0,2.991-3.29,7.216,7.216,0,0,0,.18-1.682c.03-3.324.038-6.649.049-9.973,0-.891-.019-1.782-.014-2.673a10.817,10.817,0,0,0-1.6-5.61q-4.008-6.847-8.016-13.695c-1.011-1.722-2.006-3.455-3.077-5.139a11.44,11.44,0,0,0-5.68-4.755C1323.831,694.475,1323.81,694.408,1323.74,694.308Z" transform="translate(-944.035 -692.382)" fill="#dedede"/>
					</g>
				</svg>
				</a>	
		</div>

		<button id="toggle-nav">Toggle</button>

		<nav id="site-navigation" class="main-navigation nav hidden">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
</header>

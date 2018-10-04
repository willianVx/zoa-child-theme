<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package zoa
 */
get_header();
$img_404 = get_template_directory_uri() . '/images/404.png';
?>

<main id="main" class="site-main">
	<div class="not-found">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<figure>
						<img src="<?php echo esc_url( $img_404 ); ?>" alt="<?php esc_attr_e( '404 image', 'zoa' ); ?>">
					</figure>
				</div>
				<div class="col-md-5">
					<h2 class="title"><?php esc_html_e( 'Whoops!', 'zoa' ); ?></h2>
					<h3 class="sub-title"><?php esc_html_e( 'Your style does not exist!', 'zoa' ); ?></h3>
					<p><?php esc_html_e( 'Any question? Please contact us, we’re usually pretty quick. Cowboys to urbanites, professional athletes to ski bums, business suit to fishing guides.', 'zoa' ); ?></p>
					<a class="back-to-home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go back', 'zoa' ); ?></a>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .not-found -->
</main>

<?php
get_footer();

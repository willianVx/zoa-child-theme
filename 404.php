<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package zoa
 */
get_header();
$img_404 = get_stylesheet_directory_uri() . '/img/404.png';
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
					<h2 class="title"><?php esc_html_e( 'Opa!', 'Instaarts' ); ?></h2>
					<h3 class="sub-title"><?php esc_html_e( 'Infelizmente não achamos a página que você procurava', 'Instaarts' ); ?></h3>
					<p><?php esc_html_e( 'Alguma pergunta? por favor fale conosco através do chat ou pelo e-mail: contato@instaarts.com.br .', 'Instaarts' ); ?></p>
					<a class="back-to-home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Voltar', 'Instaarts' ); ?></a>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .not-found -->
</main>

<?php
get_footer();

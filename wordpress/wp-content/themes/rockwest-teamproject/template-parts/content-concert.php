<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			print("<h2> Dit is het uitzicht voor DETAIL</h2>");
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			print("<h2> Dit is het uitzicht voor ARCHIEF</h2>");
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
        if ( is_single() ) :
			the_content();
			print('<hr/>');
			$value_tuin =  get_post_meta(get_the_ID(),'_vastg_tuin', true);
    		$value_prijs =  get_post_meta(get_the_ID(),'_vastg_prijs', true);
			$value_slaapk =  get_post_meta(get_the_ID(),'_vastg_slaapkamer', true);
			print('De prijs is: ' . $value_prijs);
			print('<br/>');
			print('Aantal slaapkamers: ' . $value_slaapk);
			print('<br/>');
			if($value_tuin == "heefttuin"){
				print("heeft tuin");
			}else{
				print("heeft geen tuin");
			}
			
			$value_makelaar_id = get_post_meta(get_the_ID(), '_vastg_makelaar', true);
			if ($value_makelaar_id){
				$makelaar = get_post($value_makelaar_id);
				$naam_makelaar = $makelaar->post_title;
				$thumnail_tag_makelaar = get_the_post_thumbnail($makelaar->ID, 'thumbnail');
				//print_r($makelaar);
			}
			print("<div class='row'>");
			print("<div class='col-8'>");
			print("Verkocht door: " . $naam_makelaar);

			print("</div>");
			print("<div class='col-4'>");
			print($thumnail_tag_makelaar);
			print("</div>");
			print("</div>");
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

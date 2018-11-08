<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">
        <?php
            // WP_Query arguments
            $args = array(
                'post_type'              => array( 'vastgoed' ),
                'nopaging'               => false,
                'posts_per_page'         => '2',
                'order'                  => 'DESC',
                'orderby'                => 'date',
            );

            // The Query
            $query = new WP_Query( $args );

            // The Loop
            if ( $query->have_posts() ) {
                print("<h1>Laatste vastgoed</h1>");
                print("<div class='row vastgoed-list'>");
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $title = get_the_title();
                    $url = wp_get_shortlink();
                    print("<article class='col-md-6'>");
                    print("<h1 class='entry-title'><a href='".$url."'>".$title."</a></h1>");
                    the_post_thumbnail();
                    print("</article>");
                    // do something
                }
            } else {
                // no posts found
                print("<strong>nog geen vastgoed in de database</strong>");
            }

            // Restore original Post Data
            wp_reset_postdata();
            print("</div>");
        ?>

		<?php
		if ( have_posts() ) :
            /* Start the Loop */
            print("<div class='row'>");
			while ( have_posts() ) : the_post();

                /*hier schrijf je de code*/
                $title = get_the_title();
                $url = wp_get_shortlink();

                print("<article class='col-md-6 col-lg-4'>");
                print("<h1><a href='$url'>$title</a></h1>");
                /* naam van de grootte + een array met 1 element class*/
                the_post_thumbnail('thumbnail',['class' => 'float-left thumbnail']);
                the_excerpt();
                print("</article>");

			endwhile;
            print("</div>");
            $arg = array(
                'mid_size' => 1,
                'prev_text' => 'vorige',
                'next_text' => 'volgende',
            );
			the_posts_pagination($arg);

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

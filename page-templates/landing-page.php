<?php
/**
 * Created by Julien Vollweiter.
 * Date: 20.04.17
 * Time: 23:07
 */

/*
Template Name: Startseite
*/
get_header(); ?>

    <div class="row fullwidth">
        <div class="hero-carousel">
            <div class="slickItem"><img class="carousel-image"
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horse-main1.png"/>
                <div class="hero-caption show-for-medium">
                    <h4>Reitstall Räuchle und RFV Scheerwiesental-Schwieberdingen</h4>
                </div>
            </div>
            <div class="slickItem"><img class="carousel-image"
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horse-main2.png"/>
                <div class="hero-caption show-for-medium">
                    <h4>Reitstall Räuchle und RFV Scheerwiesental-Schwieberdingen</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="small-10 small-centered columns">

			<?php do_action( 'foundationpress_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

                <div <?php post_class() ?> id="post-<?php the_ID(); ?>"

					<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                    <div class="entry-content">
						<?php the_content(); ?>
                    </div>

					<?php do_action( 'foundationpress_page_before_comments' ); ?>
					<?php comments_template(); ?>
					<?php do_action( 'foundationpress_page_after_comments' ); ?>
                </div>

			<?php endwhile; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.hero-carousel').slick({
                infinite: true,
                autoplay: true,
                fade: true,
                speed: 1800,
                cssEase: 'linear',
                adaptiveHeight: true
            })
        });
    </script>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
<?php
/**
 * Created by Julien Vollweiter.
 * Date: 20.04.17
 * Time: 23:07
 */

/*
Template Name: Turniererfolge
*/
get_header(); ?>

    <br/>

    <div class="row">
        <div class="small-10 columns">

			<?php do_action( 'foundationpress_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <h3><?php the_title(); ?></h3>
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
    <div class="row">
        <div class="small-12 medium-6 columns">
            <p>Bitte füllt folgendes Formular aus, um uns eure Turniererfolge zu schicken.</p>

            <form class="footer-form" action="#" method="post" data-abide novalidate>

                <div data-abide-error class="alert callout" style="display: none;">
                    <p><i class="fi-alert"></i>Bitte überprüfe die Eingaben.</p>
                </div>

                <div class="row">
                    <div class="small-6 medium-4 columns">
                        <label>
                            <label for="date" class="email-form">Datum:</label>
                            <input name="date" type="date" id="date" required placeholder="01.01.2017"/>
                        </label>
                    </div>
                    <div class="small-6 medium-8 columns">
                        <label>
                            <label for="place" class="email-form">Turnierort:</label>
                            <input name="place" type="text" id="place" required placeholder="Stuttgart"/>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-6 medium-4 columns">
                        <label>
                            <label for="rank" class="email-form">Platzierung:</label>
                            <input name="rank" type="number" id="rank" required pattern="number" placeholder="1"/>
                        </label>
                    </div>
                    <div class="small-6 medium-8 columns">
                        <label>
                            <label for="test" class="email-form">Prüfung:</label>
                            <input name="test" type="text" id="test" required placeholder="Dressur Kl. E"/>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 medium-4 columns">
                        <label>
                            <label for="horse" class="email-form">Pferd:</label>
                            <input name="horse" type="text" id="horse" required placeholder="Ben"/>
                        </label>
                    </div>
                    <div class="small-12 medium-8 columns">
                        <label>
                            <label for="name" class="email-form">Teilnehmer:</label>
                            <input name="name" type="text" id="name" required placeholder="Max Mustermann"/>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            <label for="message" class="email-form">Kommentar:</label>
                            <textarea name="message" type="text" id="message" placeholder="Nachricht"></textarea>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            <label for="email" class="email-form">Kontakt:</label>
                            <input name="email" type="email" id="email" required placeholder="max@example.com"/>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 text-right columns">
                        <button name="senden" class="submit button" type="submit" value="Submit">Senden</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
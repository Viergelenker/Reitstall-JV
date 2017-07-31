<?php
/**
 * The template for displaying the footer.
 *
 * Contains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer" role="contentinfo">

    <div class="row">

        <div class="small-10 medium-6 columns">
            <form class="footer-form" action="<?php echo get_template_directory_uri(); ?>/parts/contact-email.php"
                  method="post">
                <div class="medium-10 small-offset-1 columns">
                    <label>
                        <label for="email">Kontakt:</label>
                        <input name="email" type="email" id="email" placeholder="Email Adresse"/>
                    </label>
                </div>
                <div class="medium-10 small-offset-1 columns">
                    <label>
                        <textarea rows="5" name="message" id="message" placeholder="Nachricht"></textarea>
                    </label>
                </div>
                <div class="medium-10 small-offset-1 end columns">
                    <button name="send" class="submit float-left" type="submit" value="Submit">Senden</button>
                </div>
            </form>
        </div>


        <div class="small-12 medium-6 end columns">
            <div class="small-11 small-offset-1 columns footerMenu">
	            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer widget') ) : ?>
	            <?php endif; ?>
            </div>

        </div>

        <div class="row">
            <hr/>
            <div class="small-11 small-offset-1 columns">
                <p class="disclaimer">Bilder und Text sind Eigentum von Reitstall Räuchle.</p>
                <p class="disclaimer">Es wird keine Haftung für Aussagen oder Verlinkungen übernommen.</p>
                <p class="disclaimer">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>.</p>
            </div>
        </div>

    </div>
</footer>

</div>  <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html> <!-- end page -->
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

        <div class="small-12 medium-6 columns">
            <div class="small-12 columns">
                <nav role="navigation">
					<?php joints_footer_links(); ?>
                </nav>
            </div>

            <ul class="inline-list social">

            </ul>
            <p class="copywrite">Bilder und Text sind Eigentum von Reitstall Räuchle.</p>
            <p class="copywrite">Es wird keine Haftung für Aussagen oder Verlinkungen übernommen.</p>
        </div>

        <div class="small-12 medium-6 columns">
            <p class="logo show-for-small-only"><i class="fi-target"></i> Reitstall Räuchle</p>
            <form class="footer-form" action="<?php echo get_template_directory_uri(); ?>/parts/contact-email.php"
                  method="post">
                <div class="row">
                    <div class="medium-9 medium-push-3 columns">
                        <label>
                            <label for="email">Kontakt:</label>
                            <input name="email" type="email" id="email" placeholder="Email Adresse"/>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-9 medium-push-3 columns">
                        <label>
                            <textarea rows="5" name="message" id="message" placeholder="Nachricht"></textarea>
                        </label>
                    </div>
                    <div class="row">
                        <div class="medium-9 medium-push-3 columns">
                            <button name="send" class="submit" type="submit" value="Submit">Senden</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div id="inner-footer" class="row">

        <div class="small-12 medium-12 large-12 columns">
            <p class="source-org copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>.</p>
        </div>

    </div> <!-- end #inner-footer -->

</footer>

</div>  <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html> <!-- end page -->
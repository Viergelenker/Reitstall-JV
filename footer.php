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

        <div class="small-10 small-push-1 medium-6 float-left columns">
            <form class="footer-form" action="<?php echo get_template_directory_uri(); ?>/parts/contact-email.php"
                  method="post">
                <div class="medium-10 columns">
                    <label>
                        <label for="email">Kontakt:</label>
                        <input name="email" type="email" id="email" placeholder="Email Adresse"/>
                    </label>
                </div>
                <div class="medium-10 columns">
                    <label>
                        <textarea rows="5" name="message" id="message" placeholder="Nachricht"></textarea>
                    </label>
                </div>
                <div class="medium-10 end columns">
                    <button name="send" class="submit" type="submit" value="Submit">Senden</button>
                </div>
            </form>
        </div>

        <div class="small-10 small-push-1 medium-6 end columns">
            <div class="small-12 columns footerMenu">
                <p class="sitemap">Seiten:</p>
                <nav role="navigation">
					<?php joints_footer_links(); ?>
                </nav>
            </div>
            <hr/>
            <div class="small-12 small-centered columns">
                <p class="disclaimer">Bilder und Text sind Eigentum von Reitstall Räuchle.</p>
                <p class="disclaimer">Es wird keine Haftung für Aussagen oder Verlinkungen übernommen.</p>
            </div>
        </div>

    </div>

    <div id="inner-footer" class="row">

        <div class="small-12 text-center columns">
            <p class="source-org copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>.</p>
        </div>

    </div> <!-- end #inner-footer -->

</footer>

</div>  <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html> <!-- end page -->
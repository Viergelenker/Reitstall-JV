<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-left" style="background-color: #2C3E50" id="off-canvas" data-off-canvas>
    <button class="close-button" aria-label="Close menu" type="button" data-close="">
        <span aria-hidden="true">&times;</span>
    </button>
	<?php joints_off_canvas_nav(); ?>
</div>
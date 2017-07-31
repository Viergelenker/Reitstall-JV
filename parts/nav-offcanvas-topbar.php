<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-left medium-12 large-5 columns float-left menu-centered">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</ul>
	</div>
	<div class="top-right medium-12 float-right large-7 columns show-for-medium">
		<?php joints_top_nav(); ?>
	</div>
	<div class="top-bar-right small-12 columns float-right show-for-small-only">
		<ul class="menu" style="background-color: transparent">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'reitstall-jv' ); ?></a></li>
		</ul>
	</div>
</div>
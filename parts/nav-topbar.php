<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/responsive-navigation/
 */
?>

<div class="top-bar row" id="main-menu">
	<div class="top-bar-left medium-12 large-6 columns">
		<ul class="menu">
			<li><a style="font-family: 'Cinzel', serif;" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</ul>
	</div>
	<div class="top-bar-right medium-12 large-6 columns">
		<?php joints_top_nav(); ?>
	</div>
</div>
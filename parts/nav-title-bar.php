<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title"><?php _e( 'Menu', 'reitstall-jv' ); ?></div>
</div>

<div class="top-bar" id="top-bar-menu">
	<div class="medium-12 large-6 columns show-for-<?php echo $breakpoint ?>">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</ul>
	</div>
	<div class="medium-12 large-6 columns">
		<?php joints_top_nav(); ?>
	</div>
</div>
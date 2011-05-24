<?php
	$color1 = '#006b94';
	//$color1 = '#f00';
	
	$color2 = '#66A6BF';
	//$color2 = '#00f';
	
	$color3 = '#006b94';
	//$color3 = '#f00';

?>
<style type="text/css" media="screen">

 
	/* Color 1 */
	
		/* Background Color */
		#header,
		.featured-posts .control-panel a,
		.widget .tab-active,
		#reply button,
		.tools-nav nav li a {
			background-color: <?php echo $color1; ?>;
		}

		/* Border Color */
		#site-nav li,
		.callout-item,
		.widget .tab { 
			border-color: <?php echo $color1; ?>;
		}
	
		/* Text Color */
		.featured-posts .control-panel {
			color: <?php echo $color1; ?>;
		}


	/* Color 2 */
	
		/* Background Color */
		#site-nav,
		#site-nav li,
		.featured-posts .carousel-item,
		.post-teasers .post-teaser-item {
			background-color: <?php echo $color2; ?>;
		}

	/* Link Color */
	a {
		color: <?php echo $color3; ?>;
	}
</style>
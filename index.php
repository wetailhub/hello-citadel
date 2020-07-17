<?php
/**
 * Plugin Name: Hello Citadel
 * Plugin URI: https://wetail.io
 * Description: Sample plugin for testing Citadel integration
 * Author: Wetail AB
 * Version: 0.0.1
 * Author URI: https://wetail.io
 * License: GPL-3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

add_action('wp_footer', function(){
	?>
	<style>
		.helcita {
			position: fixed;
			bottom: 0;
			left: 0;
			width: 100%;
			padding: 10px;
			background: #fff;
			border: 1px solid #ccc;
			color: #999999;
			font-size: 14px;
			text-align: center;
			display: none;
		}
		.helcita.vis {
			display: block;
		}
	</style>
	<div class="helcita vis" onclick="this.classList.remove('vis')">
		<p>
			Hello, Citadel!
		</p>
	</div>
	<?php
});
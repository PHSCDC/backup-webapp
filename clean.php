<?php
	function clean($string) {
		return str_replace("..","-",preg_replace('/[^A-Za-z0-9.\-\_]/', '-', $string)); // Replaces special chars with hyphens.
	}
?>

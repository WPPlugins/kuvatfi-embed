<?php
	
	defined("ABSPATH") or die("get out");
	
	/**
	* Plugin Name: Kuvat.fi embed
	* Plugin URI: http://kuvat.fi
	* Description: Usage: [kuvat width=(width in pixels) height=(height in pixels) bgcolor=0/1/2 thumbstrip=0/1 captions=0/1]http://demo.kuvat.fi/kuvat/[/kuvat]
	* Version: 1.1.1
	* Author: Mediadrive
	* Author URI: http://kuvat.fi
	*/
	
	function kuvatfiShortcode($a, $c){
		$url = parse_url($c);
		
		if($url) {
			wp_oembed_add_provider("http://".$url["host"]."/*", "http://www.kuvat.fi/?type=oembed");
		}
		
		return wp_oembed_get($c, $a);
	}
	add_shortcode("kuvat", "kuvatfiShortcode");
	
	function kuvatfiArgs($provider, $url, $args) {
		if(strstr($provider, "kuvat.fi/?type=oembed")) {
			foreach($args as $key => $value) {
				switch($key) {
					case "width":
					case "height":
					case "discover":
						break;
					default:
						$provider = add_query_arg($key, urlencode($value), $provider);
						break;
				}
			}
			
			$provider = add_query_arg("version", "wp-1.1.1", $provider);
		}
		
		return $provider;
	}
	
	add_filter("oembed_fetch_url", "kuvatfiArgs", 10, 3);
	
?>

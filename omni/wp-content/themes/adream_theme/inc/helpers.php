<?php 
/**
 * Adream Theme Helpers
 *
 * @package Adream
 */

/*======================================
=            Image function            =
======================================*/

function img($src="",$class=""){
	if(!empty($src)){
		$class = !empty($class) ? $class : " ";
		echo '<img class="image '.$class.'" src="'.get_template_directory_uri().'/assets/img/'.$src.'" alt="'.$src.'">';
	}
}
function bgimg($src=""){
	if(!empty($src)){
		echo 'style="background-image: url('.get_template_directory_uri().'/assets/img/'.$src.')"';
	}
}
function bgth($src=""){
	if(!empty($src)){
		echo 'style="background-image: url('.$src.')"';
	}
}
function imgth($src="",$class=""){
	if(!empty($src)){
		$class = !empty($class) ? $class : " ";
		echo '<img class="image '.$class.'" src="'.$src.'" alt="'.$src.'">';
	}
}
/*=====  End of Image function  ======*/

/*======================================
=            Custom content            =
======================================*/

if(!function_exists('custom_content')){
	function custom_content($size=0){
		if( $size==0 ){$size = 50;}
		$string =  get_the_content();
		$string_arr = explode(' ',$string);
		if(sizeof($string_arr) > $size){
			$string = implode(" ", array_slice($string_arr,0,$size));
			echo $string . '...';
		}else{
			echo $string;
		}
	}
}

/*=====  End of Custom content  ======*/

/*=============================================
=            Random text generator            =
=============================================*/

if(!function_exists('random_text')){
	function random_text($max=0){
		$max_r = !empty($max) ? $max : 399;
		$lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci minima, laboriosam amet. Adipisci hic minima a pariatur nam, vero, repudiandae quaerat, repellendus totam voluptates quisquam aliquam placeat est. Qui rem reprehenderit architecto minima, quidem quam, molestias eos veniam, nulla distinctio, asperiores. Harum voluptatem omnis porro quibusdam. Assumenda facilis necessitatibus, modi!";
		$rand =  rand(50, $max_r);
		echo substr($lorem, 0, $rand); 
	}
}
/*=====  End of Random text generator  ======*/
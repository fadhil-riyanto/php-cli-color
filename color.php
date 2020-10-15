<?php 
class cli_color{
	
	//Underline
	function underline($text){
		echo "\e[4;1m $text";
	}
	//color background
	function color_background($text){
		echo "\e[7;1m $text";
	}
	//black
	function black($text){
		echo "\e[30;1m $text";
	}
	//red
	function red($text){
		echo "\e[31;1m $text";
	}
	//green
	function green($text){
		echo "\e[32;1m $text";
	}
	//yelow
	function yellow($text){
		echo "\e[33;1m $text";
	}
	
	function blue($text){
		echo "\e[34;1m $text";
	}
	
	function purple($text){
		echo "\e[35;1m $text";
	}
	
	function cyan($text){
		echo "\e[36;1m $text";
	}
	
	function white($text){
		echo "\e[37;1m $text";
	}
	
	function red_bg($text){
		echo "\e[41;1m $text";
	}
	
	function green_bg($text){
		echo "\e[42;1m $text";
	}
	
	function yellow_bg($text){
		echo "\e[43;1m $text";
	}
	
	function blue_bg($text){
		echo "\e[44;1m $text";
	}
	
	function purple_bg($text){
		echo "\e[45;1m $text";
	}
	
	function cyan_bg($text){
		echo "\e[46;1m $text";
	}
	
	function white_bg($text){
		echo "\e[47;1m $text";
	}
	
	function reset(){
		echo "\e[0;1m";
	}
	
	function copyright(){
		for ($i=1;$i<=7;$i++){
			echo "-";
		} $name = "Fadhil riyanto ";print " (c) " ;
		print $name;
		for ($i=1;$i<=7;$i++){
			echo "-";
		}
		echo "".PHP_EOL;
		$func = array("underline",
			"color_background",
			"black",
			"red",
			"green",
			"yellow",
			"blue",
			"purple",
			"cyan",
			"white",
			"red_bg",
			"green_bg",
			"yellow_bg",
			"blue_bg",
			"purple_bg",
			"cyan_bg",
			"white_bg",
			"reset()");
		foreach ($func as $function){
			echo "$function".PHP_EOL;
		}
	}
	function thanks(){
		$thanks_to = array("My PC","Coffe","Music");
			for($i=1;$i<=30;$i++){
				echo "-";
			}echo "".PHP_EOL;
			foreach ($thanks_to as $value){
					echo "- $value".PHP_EOL;
				}
	}
}

?>

<?php 
class cli_color{
	//============ Foreground Color ====================
	//Devs By Fadhil Riyanto
	
	function bold($text){
		echo "\e[1;1m $text";
	}
	
	function dark($text){
		echo "\e[2;1m $text";
	}
	
	function italic($text){
		echo "\e[3;1m $text";
	}
	
	//Underline
	function underline($text){
		echo "\e[4;1m $text";
	}
	
	function blink($text){
		echo "\e[5;1m $text";
	}
	
	function reverse($text){
		echo "\e[7;1m $text";
	}
	
	function concealed($text){
		echo "\e[8;1m $text";
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
	
	function magenta($text){
		echo "\e[35;1m $text";
	}
	
	function cyan($text){
		echo "\e[36;1m $text";
	}
	
	function light_gray($text){
		echo "\e[37;1m $text";
	}
	
	function dark_gray($text){
		echo "\e[90;1m $text";
	}
	
	function light_red($text){
		echo "\e[91;1m $text";
	}
	
	function light_green($text){
		echo "\e[92;1m $text";
	}
	
	function light_yellow($text){
		echo "\e[93;1m $text";
	}
	function light_blue($text){
		echo "\e[94;1m $text";
	}
	
	function light_magenta($text){
		echo "\e[95;1m $text";
	}
	
	function light_cyan($text){
		echo "\e[96;1m $text";
	}
	
	function white($text){
		echo "\e[97;1m $text";
	}
	
	//=================== bG COLOR ===================
	function bg_black($text){
		echo "\e[40;1m $text";
	}
	
	function bg_red($text){
		echo "\e[41;1m $text";
	}
	
	function bg_green($text){
		echo "\e[42;1m $text";
	}
	
	function bg_yellow($text){
		echo "\e[43;1m $text";
	}
	
	function bg_blue($text){
		echo "\e[44;1m $text";
	}
	
	function bg_magenta($text){
		echo "\e[45;1m $text";
	}
	
	function bg_cyan($text){
		echo "\e[46;1m $text";
	}
	
	function bg_light_gray($text){
		echo "\e[47;1m $text";
	}
	
	function bg_dark_gray($text){
		echo "\e[100;1m $text";
	}
	
	function bg_light_red($text){
		echo "\e[101;1m $text";
	}
	
	function bg_light_green($text){
		echo "\e[102;1m $text";
	}
	
	function bg_light_yellow($text){
		echo "\e[103;1m $text";
	}
	
	function bg_light_blue($text){
		echo "\e[104;1m $text";
	}
	
	function bg_light_magenta($text){
		echo "\e[105;1m $text";
	}
	
	function bg_light_cyan($text){
		echo "\e[106;1m $text";
	}
	
	function bg_white($text){
		echo "\e[107;1m $text";
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
		}echo "".PHP_EOL;$sosmed = array ("Instagram : www.instagram.com/id_fadhil_riyanto/",
		"Github : github.com/fadhil-riyanto");echo "".PHP_EOL;
		;foreach($sosmed as $info){
			echo "++ $info".PHP_EOL;
		}
	}
	function thanks(){
		$thanks_to = array("My PC","Coffe","Music","Internet");
			for($i=1;$i<=30;$i++){
				echo "-";
			}echo "".PHP_EOL;
			foreach ($thanks_to as $value){
					echo "- $value".PHP_EOL;
				}
	}
}
switch ($argv[1]){
	case "--info":
		$data = new cli_color;
			$data->copyright();
		break;
	case "--thanks":
		$data_1 = new cli_color;
			$data_1->thanks();
		break;
	case "--help":
		$data = new cli_color;
			echo $data->green("######################################################################").PHP_EOL;
			echo $data->cyan("See https://github.com/fadhil-riyanto/php-cli-color readme file...okay").PHP_EOL;
			$data->reset();
		break;
}
?>

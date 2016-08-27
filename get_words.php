<?php
require_once('jdecoder.php');
	function get_words($word) {

		$filename = 'script.py';

		if (file_exists($filename)){
			$str_arr = explode(", ", exec("$filename $word", $a));

			$arr_encode = array();
			foreach ($str_arr as $str) {
				$arr_encode[] = jdecoder(substr (preg_replace('/\[|\]|\'/', '', $str), 1));
			}
			return (implode("\n", array_unique($arr_encode)));
			
		}
		else echo ('Python script is not found!');
	}
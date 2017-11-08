<?php 


class Cars {


	public $wheel_count = 4;

	static $door_count = 4;



	function __construct(){

		echo self::$door_count++;

	}


	function __destruct(){

		echo self::$door_count--;

	}


}

$bmw = new Cars();

$merceds = new Cars();

$merceds_2 = new Cars();



 ?>

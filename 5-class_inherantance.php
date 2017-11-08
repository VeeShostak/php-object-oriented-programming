<?php 


class Cars {

	var $wheels = 6;

	function gretting(){

		return "hello";


	}

}


class Trucks extends Cars {


}

$bmw = new Cars();

$frontier = new Trucks();

echo $frontier->wheels;








 ?>

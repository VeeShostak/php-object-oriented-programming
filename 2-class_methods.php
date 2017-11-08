<?php 


class Cars {


	function testing(){


	}



	function testing2(){


	}

}

// php keeps track of all methods of each class

$the_methods = get_class_methods('Cars');

foreach ($the_methods as  $method) {
	echo $method . "<br>";
}







 ?>

<?php 
// php automatically keeps track of every class defined

class Cars {


}

// get all classes that php is declaring automatically into this variable
$my_classes = get_declared_classes();


foreach ($my_classes as  $class) {

	echo $class . "<br>";
}







 ?>

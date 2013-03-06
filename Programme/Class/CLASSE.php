<?php

class vehicle {
  var $motor;

	function setmotor($motor) {
		$this->motor = $motor;
	}
	
	function getmotor (){
		return $this->motor;
	}
}

class rad extends vehicle {
  var $rad;
  
	function setrad ($rad) {
		$this->rad = $rad;
	}
	
	function getrad () {
		return $this->rad;
	}
}

class auto_marke extends vehicle {
  var $auto_marke;
  
	function setauto_marke ($auto_marke) {
		$this->auto_marke = $auto_marke;
	}
	
	function getauto_marke () {
		return $this->auto_marke;
	}
}

$ktm = new rad ();

$ktm ->motor = ('kein motor');

$ktm ->rad = ('zwei raedle');

$ktm ->auto_marke = ('KTM AAAAAAustria');

echo $ktm->getmotor();
echo '<br/>';
echo $ktm->getrad();
echo '<br/>';
echo $ktm->getauto_marke();


?>
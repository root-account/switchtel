<?php

// Price class
Abstract class Price{
	abstract public function setPrice(float $price);
	abstract public function getPrice();
}

// Widget class
Class Widget extends Price{
	protected $_price = 15;
	public function setPrice(float $price) {
		$this->_price = $price;
	}

	public function getPrice() {
		return $this->_price;
	}

}

// Doodad class
Class Doodad extends Price{

	protected $_price = 10;

	public function setPrice(float $price) {
		$this->_price = $price;
	}

	public function getPrice() {
		return $this->_price;
	}
}


function increasePrice(Price $obj, float $percentage) {
	$price = $obj->getPrice();
  $new_price = $price + ($price * $percentage / 100);
	$obj->setPrice($new_price);

  echo "Original price is ".$price." after the ".$percentage."% increase the new price is ".$obj->getPrice()."<br/>";

  // return $obj->getPrice();
}


$objWidget = new Widget;
$objDoodad = new Doodad;

//You can set a new price here before hand if need be;
// $objWidget->setPrice(25);
// $objDoodad->setPrice(85);

// Call the function and pass object to increase price by said percentage.
increasePrice($objDoodad, 2.2);
increasePrice($objWidget, 2);

?>

<?php
class Car
{
	public $brand;
	public $name;
	public $type;
	public $date;
	public $price;
	public $color;
}

interface Carr
{
	public function __construct($brand,$name,$type,$date,$price,$color);
	public function getBrand();
	public function getName();
	public function getType();
	public function getDate();
	public function getPrice();
	public function getColor();
}

class Result implements Carr
{
	public function __construct($brand,$name,$type,$date,$price,$color){
		$this->brand = $brand;
		$this->name = $name;
		$this->type = $type;
		$this->date = $date;
		$this->price = $price;
		$this->color = $color;
	}
	public function getBrand(){
		return $this->brand;
	}
	public function getName(){
		return $this->name;
	}
	public function getType(){
		return $this->type;
	}
	public function getDate(){
		return $this->date;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getColor(){
		return $this->color;
	}
}


$mashine1 = new Result('BMW','BMW X5','Внедорожник',2015,3700000,'Чёрный');
$mashine2 = new Result('Porshe','Porshe 911 GT3','Спорткар',2016,10318000,'Красный');

?>




<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Наследование</title>
</head>
<body>
	<div>
		<h2>Автомобили:</h2><br>
		<div>
			Брэнд: <?php echo $mashine1->getBrand();?><br>
			Название: <?php echo $mashine1->getName();?><br>
			Тип: <?php echo $mashine1->getType();?><br>
			Дата выпуска: <?php echo $mashine1->getDate()." год";?><br>
			Цена: <?php echo "от ".$mashine1->getPrice()." рублей";?><br>
			Цвет: <?php echo $mashine1->getColor();?>
			<br>
			<br>
		</div>
		<div>
			Брэнд: <?php echo $mashine2->getBrand();?><br>
			Название: <?php echo $mashine2->getName();?><br>
			Тип: <?php echo $mashine2->getType();?><br>
			Дата выпуска: <?php echo $mashine2->getDate()." год";?><br>
			Цена: <?php echo "от ".$mashine2->getPrice()." рублей";?><br>
			Цвет: <?php echo $mashine2->getColor();?>
		</div>
	</div>
</body>
</html>



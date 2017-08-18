<?php
class Car
{
	public $Brand;
	public $Name;
	public $Type;
	public $Date;
	public $Price;
	public $Color;
}

interface Carr
{
	public function __construct($Brand,$Name,$Type,$Date,$Price,$Color);
	public function getBrand();
	public function getName();
	public function getType();
	public function getDate();
	public function getPrice();
	public function getColor();
}

class Result implements Carr
{
	public function __construct($Brand,$Name,$Type,$Date,$Price,$Color){
		$this->Brand = $Brand;
		$this->Name = $Name;
		$this->Type = $Type;
		$this->Date = $Date;
		$this->Price = $Price;
		$this->Color = $Color;
	}
	public function getBrand(){
		return $this->Brand;
	}
	public function getName(){
		return $this->Name;
	}
	public function getType(){
		return $this->Type;
	}
	public function getDate(){
		return $this->Date;
	}
	public function getPrice(){
		return $this->Price;
	}
	public function getColor(){
		return $this->Color;
	}
}


$Mashine1 = new Result('BMW','X5','Внедорожник',2015,3700000,'Чёрный');
$Mashine2 = new Result('Porshe','911 GT3','Спорткар',2016,10318000,'Красный');

class TV
{
	public $Brand;
	public $Model;
	public $Type;
	public $DScreen;
	public $DScreenCM;
	public $ImageQualityIndex;
	public $ImageQualityIndexString;
	public $NumberPorts;
	public $Price;
}

interface televizori
{
	public function __construct($Brand,$Model,$Type,$DScreen,$DScreenCM,$ImageQualityIndex,$ImageQualityIndexString,$NumberPorts,$Price);
	public function getBrand();
	public function getModel();
	public function getType();
	public function getDScreen();
	public function getDScreenCM();
	public function getImageQualityIndex();
	public function getImageQualityIndexString();
	public function getNumberPorts();
	public function getPrice();
}

class impTV implements televizori
{
	public function __construct($Brand,$Model,$Type,$DScreen,$DScreenCM,$ImageQualityIndex,$ImageQualityIndexString,$NumberPorts,$Price){
	$this->Brand = $Brand;
	$this->Model = $Model;
	$this->Type = $Type;
	$this->DScreen = $DScreen;
	$this->DScreenCM = $DScreenCM;
	$this->ImageQualityIndex = $ImageQualityIndex;
	$this->ImageQualityIndexString = $ImageQualityIndexString;
	$this->NumberPorts = $NumberPorts;
	$this->Price = $Price;
	}
	public function getBrand(){
		return $this->Brand;
	}
	public function getModel(){
		return $this->Model;
	}
	public function getType(){
		return $this->Type;
	}
	public function getDScreen(){
		return $this->DScreen;
	}
	public function getDScreenCM(){
		return $this->DScreenCM;
	}
	public function getImageQualityIndex(){
		return $this->ImageQualityIndex;
	}
	public function getImageQualityIndexString(){
		return $this->ImageQualityIndexString;
	}
	public function getNumberPorts(){
		return $this->NumberPorts;
	}
	public function getPrice(){
		return $this->Price;
	}
}

$TV1 = new impTV('LG','22LH450V','Edge LED',22,55,100,'PMI',1,10499);
$TV2 = new impTV('Samsung','UE32J5205','Edge LED',32,81,100,'CMR',1,21999);

class Pen
{
	public $Brand;
	public $Type;
	public $Length;
	public $LineThickness;
	public $ColorPen;
	public $ColorLine;
	public $Price;
}

interface Penn
{
	public function __construct($Brand,$Type,$Length,$LineThickness,$ColorPen,$ColorLine,$Price);
	public function getBrand();
	public function getType();
	public function getLength();
	public function getLineThickness();
	public function getColorPen();
	public function getColorLine();
	public function getPrice();
}

class Penns implements Penn
{
	public function __construct($Brand,$Type,$Length,$LineThickness,$ColorPen,$ColorLine,$Price){
		$this->Brand = $Brand;
		$this->Type = $Type;
		$this->Length = $Length;
		$this->LineThickness = $LineThickness;
		$this->ColorPen = $ColorPen;
		$this->ColorLine = $ColorLine;
		$this->Price = $Price;
	}
	public function getBrand(){
		return $this->Brand;
	}
	public function getType(){
		return $this->Type;
	}
	public function getLength(){
		return $this->Length;
	}
	public function getLineThickness(){
		return $this->LineThickness;
	}
	public function getColorPen(){
		return $this->ColorPen;
	}
	public function getColorLine(){
		return $this->ColorLine;
	}
	public function getPrice(){
		return $this->Price;
	}
}

$Pen1 = new Penns('PRESTO','Гелевая',12,0.6,'Красный','Красный',40);
$Pen2 = new Penns('Elementary','Шариковая',10,0.7,'Жёлтый','Синий',19);

class Ducks
{
	public $Group;
	public $Name;
	public $DGroup;
	public $Pol;
	public $Ves;
	public $Geoloction;
}

interface Duckss
{
	public function __construct($Group,$Name,$DGroup,$Pol,$Ves,$Geoloction);
	public function getGroup();
	public function getName();
	public function getDGroup();
	public function getPol();
	public function getVes();
	public function getGeoloction();
}
class Duck implements Duckss
{
	public function __construct($Group,$Name,$DGroup,$Pol,$Ves,$Geoloction){
		$this->Group = $Group;
		$this->Name = $Name;
		$this->DGroup = $DGroup;
		$this->Pol = $Pol;
		$this->Ves = $Ves;
		$this->Geoloction = $Geoloction;
	}
	public function getGroup(){
		return $this->Group;
	}
	public function getName(){
		return $this->Name;
	}
	public function getDGroup(){
		return $this->DGroup;
	}
	public function getPol(){
		return $this->Pol;
	}
	public function getVes(){
		return $this->Ves;
	}
	public function getGeoloction(){
		return $this->Geoloction;
	}
}

$Duck1 = new Duck('Домашняя', 'Домашняя утка','','Самец',4.25,'Евразии');
$Duck2 = new Duck('Дикая', 'Нырки','Ныркова','Самец',3.34,'Евразии');
$Duck3 = new Duck('Дикая', 'Речная утка','Речная','Самка',3.78,'Евразии');

class Tovar
{
	public $Name;
	public $Type;
	public $Price;
	public $Nali;
}

interface Tovars
{
	public function __construct($Name,$Type,$Price,$Nali);
	public function getName();
	public function getType();
	public function getPrice();
	public function getNali();
}

class Tovarov implements Tovars
{
	public function __construct($Name,$Type,$Price,$Nali){
		$this->Name = $Name;
		$this->Type = $Type;
		$this->Price = $Price;
		$this->Nali = $Nali;
	}
	public function getName(){
		return $this->Name;
	}
	public function getType(){
		return $this->Type;
	}
	public function getPrice(){
		return $this->Price;
	}
	public function getNali(){
		return $this->Nali;
	}
}

$Tovar1 = new Tovarov('Очки','Оптический прибор',2000,5);
$Tovar2 = new Tovarov('Наушники','Аудиотехника',4300,0);
$Tovar3 = new Tovarov('Fairy','Моющее средство',150.5,7);

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
			Брэнд: <?php echo $Mashine1->getBrand();?><br>
			Название: <?php echo $Mashine1->getBrand() .' '. $Mashine1->getName();?><br>
			Тип: <?php echo $Mashine1->getType();?><br>
			Дата выпуска: <?php echo $Mashine1->getDate()." год";?><br>
			Цена: <?php echo "от ".$Mashine1->getPrice()." рублей";?><br>
			Цвет: <?php echo $Mashine1->getColor();?>
			<br>
			<br>
		</div>
		<div>
			Брэнд: <?php echo $Mashine2->getBrand();?><br>
			Название: <?php echo $Mashine2->getBrand() .' '. $Mashine2->getName();?><br>
			Тип: <?php echo $Mashine2->getType();?><br>
			Дата выпуска: <?php echo $Mashine2->getDate()." год";?><br>
			Цена: <?php echo "от ".$Mashine2->getPrice()." рублей";?><br>
			Цвет: <?php echo $Mashine2->getColor();?>
		</div>
	</div>
	<br>
	<br>
	<div>
		<h2>Телевизоры:</h2><br>
		<div>
			Брэнд: <?php echo $TV1->getBrand();?><br>
			Название: <?php echo $TV1->getBrand() .' '. $TV1->getModel();?><br>
			Тип экрана: <?php echo $TV1->getType();?><br>
			Диагональ экрана: <?php echo $TV1->getDScreen().', '.$TV1->getDScreenCM().'(см)';?><br>
			Индекс качества изоображения: <?php echo $TV1->getImageQualityIndex().' '.$TV1->getImageQualityIndexString();?><br>
			Количество HDMI портов: <?php echo $TV1->getNumberPorts();?><br>
			Цена: <?php echo $TV1->getPrice()." рублей";?>
			<br>
			<br>
		</div>
		<div>
			Брэнд: <?php echo $TV2->getBrand();?><br>
			Название: <?php echo $TV2->getBrand() .' '. $TV2->getModel();?><br>
			Тип экрана: <?php echo $TV2->getType();?><br>
			Диагональ экрана: <?php echo $TV2->getDScreen().', '.$TV2->getDScreenCM().'(см)';?><br>
			Индекс качества изоображения: <?php echo $TV2->getImageQualityIndex().' '.$TV2->getImageQualityIndexString();?><br>
			Количество HDMI портов: <?php echo $TV2->getNumberPorts();?><br>
			Цена: <?php echo $TV2->getPrice()." рублей";?>
		</div>
	</div>
	<br>
	<br>
	<div>
		<h2>Ручки:</h2>
		<div>
			Брэнд: <?php echo $Pen1->getBrand();?><br>
			Тип ручки: <?php echo $Pen1->getType();?><br>
			Длина ручки: <?php echo $Pen1->getLength();?><br>
			Игольчатый пишущий узел: <?php echo $Pen1->getLineThickness() . '(мм)';?><br>
			Цвет ручки: <?php echo $Pen1->getColorPen();?><br>
			Цвет чернил: <?php echo $Pen1->getColorLine();?><br>
			Цена: <?php echo $Pen1->getPrice()." рублей";?>
			<br>
			<br>
		</div>
		<div>
			Брэнд: <?php echo $Pen2->getBrand();?><br>
			Тип ручки: <?php echo $Pen2->getType();?><br>
			Длина ручки: <?php echo $Pen2->getLength();?><br>
			Игольчатый пишущий узел: <?php echo $Pen2->getLineThickness() . '(мм)';?><br>
			Цвет ручки: <?php echo $Pen2->getColorPen();?><br>
			Цвет чернил: <?php echo $Pen2->getColorLine();?><br>
			Цена: <?php echo $Pen2->getPrice()." рублей";?>
		</div>
	</div>
	<br>
	<br>
	<div>
		<h2>Утки:</h2>
		<div>
			Группа: <?php echo $Duck1->getGroup();?><br>
			Название: <?php echo $Duck1->getName();?><br>
			Пол: <?php echo $Duck1->getPol();?><br>
			Вес: <?php echo $Duck1->getVes().'(кг)';?><br>
			Обитает: <?php echo 'в ' . $Duck1->getGeoloction();?>
			<br>
			<br>
		</div>
		<div>
			Группа: <?php echo $Duck2->getGroup();?><br>
			Название: <?php echo $Duck2->getName();?><br>
			Группа диких уток: <?php echo $Duck2->getDGroup();?><br>
			Пол: <?php echo $Duck2->getPol();?><br>
			Вес: <?php echo $Duck2->getVes().'(кг)';?><br>
			Обитает: <?php echo 'в ' . $Duck2->getGeoloction();?>
			<br>
			<br>
		<div>
			Группа: <?php echo $Duck3->getGroup();?><br>
			Название: <?php echo $Duck3->getName();?><br>
			Группа диких уток: <?php echo $Duck3->getDGroup();?><br>
			Пол: <?php echo $Duck3->getPol();?><br>
			Вес: <?php echo $Duck3->getVes().'(кг)';?><br>
			Обитает: <?php echo 'в ' . $Duck3->getGeoloction();?>
		</div>
	</div>
	<br>
	<br>
	<div>
		<h2>Товары:</h2>
		<div>
			Название: <?php echo $Tovar1->getName();?><br>
			Тип: <?php echo $Tovar1->getType();?><br>
			Цена: <?php echo $Tovar1->getPrice(). ' рублей';?><br>
			Вналичии: <?php echo $Tovar1->getNali(). '(шт)';?>
			<br>
			<br>
		</div>
		<div>
			Название: <?php echo $Tovar2->getName();?><br>
			Тип: <?php echo $Tovar2->getType();?><br>
			Цена: <?php echo $Tovar2->getPrice(). ' рублей';?><br>
			Вналичии: <?php echo $Tovar2->getNali(). '(шт)';?>
			<br>
			<br>
		</div>
		<div>
			Название: <?php echo $Tovar3->getName();?><br>
			Тип: <?php echo $Tovar3->getType();?><br>
			Цена: <?php echo $Tovar3->getPrice(). ' рублей';?><br>
			Вналичии: <?php echo $Tovar3->getNali(). '(шт)';?>
		</div>
	</div>
</body>
</html>



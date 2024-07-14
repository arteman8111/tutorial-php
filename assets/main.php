<?
interface Earth {
    public function getName();
    public static function getSurname();
    public function getSquare();
}
class People implements Earth {
    public $name;
    public $surname;
    public $wakeup;
    public $wasi = "number";
    protected $number = "\nabsvg\n";
    private $coin = "coin";
    public static $service = "Это мой класс!";
    public static function getSurname() {
        echo self::$service;
    }
    public function getName() {
        echo "My name is $this->name";
    }
    public function getSquare() {
        return $this->number;
    }
    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }
}
class Human extends People {
    public function getBein() {
        return $this->number;
    }
}
$boba = new Human("Igor", "Bazhenov");
echo $boba->wasi;
echo $boba->getBein();
class ShopProduct 
{
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price;
	public $playLength;
	public $numPages;
	
	function __construct($title, $firstName, $mainName, $price, $numPages = 0, $playLength = 0) {
		$this->title = $title;
		$this->producerMainName = $mainName;
		$this->producerFirstName = $firstName;
		$this->price = $price;
		$this->numPages = $numPages;
		$this->playLength = $playLength;
	}
	
	function getProducer() {
		return "{$this->producerFirstName} {$this->producerMainName}";	
	}	
	
	function getSummaryLine() {
		$base = "{$this->title} ({$this->producerMainName}, {$this->producerFirstName})";
		return $base;
	}
}

class CDProduct extends ShopProduct
{
	function getPlayLength() {
		return $this->playLength;
	}
	
	function getSummaryLine() {
		$base = "{$this->title} ({$this->producerMainName}, {$this->producerFirstName})";
		$base .= ": Продолжительность - {$this->playLength}";
		return $base;
	}
}

class BookProduct extends ShopProduct
{
	function getNumberOfPages() {
		return $this->numPages;
	}
	
	function getSummaryLine() {
		$base = "{$this->title} ({$this->producerMainName}, {$this->producerFirstName})";
		$base .= ": {$this->numPages} стр.";
		return $base;
	}
}


$human = new Human("Artem", "Demchenko");
// $human->getName();
// Human::getSurname();
// echo $human->getSquare();
echo $human->getBein();
$product2 = new CDProduct('Первый снег', 'Группа', 
				'Моральный кодекс', 2.99, null, 55.01);

echo "Исполнитель: <b>".$product2->getProducer()."</b>";
?>
<pre><?// var_dump($human) ?></pre>

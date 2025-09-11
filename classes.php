<?php 
/*
-osztály, objektum
-Konstruktor, destruktor
-Tulajdonságok (public, private, protected)
-Öröklődés (extends)
-Trait (fgv-ek, amiket különbözö osztályokban is használhatunk)
*/

//Készíts Car osztályt, márka, típus, szín, tulajdonsággal, konstrukrtor is legyen

class Car{
    public $brand;
    public $type;
    public $color;

    public function __construct($brand, $type, $color){
        $this->brand = $brand;
        $this->type = $type;
        $this->color = $color;
    }

    public function info(){
        echo "$this->brand $this->type $this->color<br>";
    }
}

$car = new Car("Opel", "Astra", "black");
$car -> info();
echo $car -> color;

//Hozz létre a MathHelper osztály, amiben legyen egy statikus változó (pi), és egy statikus metódus (square)

class MathHelper{
    public static $pi = 3.14;

    public static function square($number){
        return $number * $number;
    }
}

echo MathHelper::$pi . "<br>";
echo MathHelper::square(5) . "<br>";

//Készíts egy ElectricCar osztályt, ami örökli a Car-t és pluszban tartalmaz egy batteryCapacity tulajdonságot

class ElectricCar extends Car{
    public $batteryCapacity;

    public function __construct($brand, $type, $color, $batteryCapacity){
        parent::__construct($brand, $type, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function info(){
        parent::info();
        echo "Akkumulátor kapacitása: $this->batteryCapacity kWh<br>";
    }

}
$eCar = new ElectricCar("Tesla", "Model 3", "red", 10000);
$eCar -> info();

//Traitek : újrahasznosító függvényeket tartalmazó tároló
//Hozz létre egy trait-et, ami tartalmaz egy metódust, ami kiírja "Szia [név]!"

trait Greeting{
    public function greet($name){
        echo "Szia {$name}";
    }
}

class User{
    use GreetingTrait; //trait importálása
}

class Admin{
    use GreetingTrait; 
}

$user = new User();
$user -> greet();

$admin = new Admin();
$admin -> greet();
?>
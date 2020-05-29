<?php

header("Content-Type: text/plain; charset=utf-8");

$a = 1;
$b = '5';
$c = '30$';
echo "\n".($a + (int)$b)."\n";
echo "\n".($a + (int)$c)."\n";
echo "\n".($b * $a)."\n";


$x = "don't watch";
$y = "x";
echo "\n".$$y."\n";


$string1 = 'Jack';
$string2 = 'son';
echo "\n".$string1.$string2."\n";


$text = "one, two, three";
echo "\n"."Start: ".$text."\n";
$arr = explode(", ", $text);
echo "\n"."Array: "."\n";
foreach ($arr as $item){
    echo $item."\n";
}


$separated_array = implode(" ", $arr);
echo "\n"."Finish: ".$separated_array."\n";


$var1 = 7;
$var2 = "7";
if($var1 === $var2) {
    echo "\n".$var1.'==='.$var2."\n";
} elseif($var1 == $var2){
    echo "\n".$var1.'=='.$var2."\n";
} else {
    echo "\n".$var1.'!='.$var2."\n";
}

$hash_array = [ "one" => 1, "two" => 2, "three" => 3];
echo "\n".$hash_array["one"]." ".$hash_array["two"]." ".$hash_array["three"]."\n";


class Person {
    public $name;
    public $surname;

    function __construct($name, $surname) {
        $this->surname = $surname;
        $this->name = $name;
    }

    public function show() {
        echo "\nname: ".$this->name."\n"."surname: ".$this->surname."\n";
    }
}
class Citizen extends Person {
    public $country;

    function __construct($name, $surname, $country) {
        parent::__construct($name, $surname);
        $this->country = $country;
    }

    public function show() {
        parent::show();
        echo "country: ".$this->country."\n\n";
    }
}

$o = new Citizen("Inna", "Glushchenko", "UA");
$o->show();

class A {
    private static $instance;
    private $num;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function get(){
        if(self::$instance === NULL) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    function set_num($num) {
        $this->num = $num;
    }
    function get_num() {
        return $this->num;
    }

}

$o1 = A::get();
$o1->set_num(1);

$o2 = A::get();
$o2->set_num(0);

print_r($o1);
print_r($o2);
?>
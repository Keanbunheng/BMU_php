<?php

namespace Lesson_2;

echo "hello </br>";
$x = 10;
$y = 20;


// single line
/*
This is a multiline
testing
*/
print "Total = " . ($x + $y) . "</br>";

echo "Total = ", ($x + $y)
    . " Hello bro<br>";

echo "test ", "hello bro", "Yoo Yoo<br>";

$pointer = &$x;
$x = 100;
echo $pointer;

// variable Constant
// define(name, value);
// syntax
// define("Br", "<br>");
// define("OlsdfE", 'first thing');

define("br", "<br>");
define("OLSDFE", 'first thing');
define("TWO", 'Second thing');
define("THREE_3", 'third value');
define("__THREE__", 'third value');


// Invalid Constant names
define("2TWO", 'third value');

// ONE = 10;
// echo Br.OlsdfE;
echo br . "TEst: " . OLSDFE . br;

const NAME = "Yoo YOO";
define("SITE_NAME", "My Website: ");
define("BASE_URL", "http://127.0.0.1/api/");
define("SITE_OWNER", "Seyha");
echo NAME . br;

echo "<h1><br></h1>";

echo "<h1>" . BASE_URL . "</BASE_URL>";

echo "<h1><br></h1>";

$constants = ["SITE_NAME", "BASE_URL", "SITE_OWNER"];
foreach ($constants as $con) {
    // echo constant($con).tab;
    echo constant($con) . PHP_EOL;
    // echo $con.br;
}
echo br;

// Magic Constant
$x1 = "Hello world";
echo "$x1. Current PHP script name is " . __FILE__ . " . " . br;


echo "$x1. Current PHP Line number is " . __LINE__ . " . " . br;



echo "$x1. Dir : Current PHP Dir name is " . __DIR__ . " . " . br;
?>
<?php
function hello()
{
    $x = "Hello world";
    echo "$x. The function name is " . __FUNCTION__ . "";
}
hello();
?>

<?php
class MyClass
{
    public function __construct()
    {
        echo "Calling " . __METHOD__ . " of " . __CLASS__ . "" . br;
    }
    function getClassName()
    {
        echo "Calling " . __METHOD__ . " of " . __CLASS__ . "" . br;
    }
}
$obj = new Myclass();
$obj->getClassName();
?>

<h1><br></h1>

<?php
trait MyTrait
{
    public function hello2()
    {
        echo "Hello world from " . __TRAIT__ . "";
    }
}
class MyClass1
{
    use MyTrait;
}
$obj1 = new MyClass1();
$obj1->hello2();
?>

<?php
class MyClass2
{
    public function __construct()
    {
        echo br . "Name of the class: " . __CLASS__ . " in " . __NAMESPACE__ . "" . br;
    }
}
require_once __DIR__ . '/php_basic.php';

$class_name = __NAMESPACE__ . '\MyClass2';
$a = new $class_name();
?>
<h1><br>New Line2</h1>


<?php

$arr = array("apple", "banana", "cherry");
print_r($arr);



?>
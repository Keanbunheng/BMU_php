

<?php
    define("br", "</br>");
// Number:integer double floating point
// String:
// boolean: true false 
// Object: refer user define type

// Data Type
//              

    $age = 20;
    // conditional operator = shorthand of if-else
    echo gettype($age);
    $status = ($age >= 18) ? "Adult" : "Minor";

    echo gettype($status).br;

    $car = new Car();
    echo gettype($car->brand).br;
?>


<?php
    class Car
    {
        public $brand = "Toyota";
    }
?>

    <!-- resources datatype -->

<?php
    $handle = fopen("file.txt", "r");
    echo fgets($handle);
    echo br.gettype($handle).br;
    fclose($handle);
?>
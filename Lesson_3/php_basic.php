<?php
$test = "hello";
if ($test[0] == "h") {
    echo "Hi";
} else if ($test == "hello") {
    echo "hello";
}
?>

<?php
$_GET['name'] = "Po";
$name  = isset($_GET['name']) ? $_GET['name'] : "anonymous";
echo $name;
?>
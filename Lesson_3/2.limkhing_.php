            <!-- Control Statement -->

    <!-- If statement -->
<!-- 
 <?php
    $d = Date("D");
    if ($d == "Tue") {
        echo "Have a nice weekend!";
    }
?>  -->


    <!-- If else statement -->
<!-- 
<?php
    $d = Date("D");
    if ($d == "Fri") {
        echo "Have a nice weekend!";
    } else {
        echo "Have a nice day!";
    }
?>  -->



    <!-- If else if and else statement -->
<!-- 
<?php
    $d = Date("D");
    if ($d == "Fri") {
        echo "Have a nice weekend!";
    } elseif ($d == "Sun") {
        echo "Have a nice Sunday!";
    } else {
        echo "Have a nice day!";
    }
?> 
-->


    <!-- If else Statement in shorthand or Terdinary -->
<!--
<?php
    $name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
?>
<?php
    $name = $_GET['name'] ?? 'anonymous';
?> 
-->



    <!-- Switch Case Statement -->
<!-- 
<?php
$today = date("D");
$data = "";

switch ($today) {
    case "Mon":
        $data= "Today is Monday. Clean your house!";
        break;
    case "Tue":
        $data= "Today is Tuesday. Buy some food!";
        break;
    case "Wed":
        $data= "Today is Wednesday. Go to work!";
        break;
    case "Thu":
        $data= "Today is Thursday. Go to school!";
        break;
    case "Fri":
        $data= "Today is Friday. Have a nice weekend!";
        break;
    case "Sat":
        $data= "Today is Saturday. Have a great day!";
        break;
    case "Sun":
        $data= "Today is Sunday. Rest and recharge!";
        break;
    default:
        $data= "No information available for today";
}
echo $data.br;
?> 
-->
<?php
    $num1=intval($_GET["num1"]);
    $num2=intval($_GET["num2"]);
    $num3=intval($_GET["num3"]);
    $num4=intval($_GET["num4"]);
    $num5=intval($_GET["num5"]);

    if ($_GET["num1"] <= 5 || $_GET["num2"] <= 5 || $_GET["$num3"] <= 5 || $_GET["num4"] <= 5 || $_GET["num5"] <= 5){
        echo "algunos de tus numero no es mayor a 5";
    }else{
        echo "todo esta funcinanod como se deve!";
    }

    echo "<br/> fin del programa";
?>
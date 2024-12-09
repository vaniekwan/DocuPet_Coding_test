<?php
var_dump($_SERVER["REQUEST_METHOD"]);
echo "hello";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $petType = htmlspecialchars($_POST["petType"]);
    #$name = htmlspecialchars($_POST["catName"]); 
    echo $petType;
    #$petType = htmlspecialchars($_GET["petType"]); 
    #echo $petType;
    #echo $name;
    /*if ($petType == "cat") {
        echo $name;
    }*/
}



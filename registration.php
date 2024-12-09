<?php
var_dump($_SERVER["REQUEST_METHOD"]);
echo "hello";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $petType = htmlspecialchars($_POST["petType"]);
    $name = htmlspecialchars($_POST["DogName"]); 
    #$petType = htmlspecialchars($_GET["petType"]); 
    echo $petType;
    #echo $name;
    if ($petType == "dog") {
        echo $name;
    }
}



<?php
    $results = "";
    $stringFunction = $_GET['string_function'];
    $userInput = $_GET['string'];

    if ($stringFunction == "strrev")
    {
        $results = strrev($userInput);
    }
    else if ($stringFunction == "ucwords")
    {
        $results = ucwords($userInput);
    }
    else if ($stringFunction == "str_shuffle")
    {
        $results = str_shuffle($userInput);
    }
    else if ($stringFunction == "strlen")
    {
        $results = strlen($userInput);
    }
    else if ($stringFunction == "md5")
    {
        $results = md5($userInput);
    }
    else if ($stringFunction == "strtolower")
    {
        $results = strtolower($userInput);
    }
    else
    {
        $results = "Invalid Selection";
    }
?>
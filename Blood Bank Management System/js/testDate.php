<?php

$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    if ($q > date("Y-m-d")) {
      $hint = "Invalid date";
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "" : $hint;
?>

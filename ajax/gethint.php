<?php
// Array with names
$a[] = "Ali";
$a[] = "Badrul";
$a[] = "Cinderella";
$a[] = "Dian";
$a[] = "Eli";
$a[] = "Fardsyad";
$a[] = "Giza";
$a[] = "HegeHali";
$a[] = "Inugami";
$a[] = "Johan";
$a[] = "Kila";
$a[] = "Liza";
$a[] = "Nine";
$a[] = "Orion";
$a[] = "Proto";
$a[] = "Aziq";
$a[] = "Raykal";
$a[] = "Cina";
$a[] = "Duan";
$a[] = "Enai";
$a[] = "Emery";
$a[] = "Spanish";
$a[] = "Toti";
$a[] = "Unni";
$a[] = "Amerika";
$a[] = "Cina";
$a[] = "England";
$a[] = "Wales";
$a[] = "Wenhern";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";
$option_hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
      if ($option_hint === "") {
        $option_hint = "<option>".$name."</option>";
      } else {
        $option_hint .= "<option>".$name."</option>";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $option_hint === "" ? "no suggestion" : $option_hint;
?>
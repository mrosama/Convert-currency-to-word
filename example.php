<?php
require_once 'Class.Currency.php';

$Money=new Currency();

//convert to Egypt

echo $Money->Eg(3500);
echo "<br/>";
echo $Money->Eg(590.60);
echo "<hr/>";

//convert to Soudia

echo $Money->Sa(3500);
echo "<br/>";
echo $Money->Sa(590.60);
echo "<hr/>";



//Tanks..
 
?>
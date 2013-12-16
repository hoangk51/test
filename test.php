<?php
$connection = new Mongo();
$db = $connection->test;
$collection = $db->hoang;
$collection->insert(array("w" => 0));

$obj = $collection->findOne();

echo "<pre>";
print_r($obj);
echo "</pre>";


?>
Something is wrong with the XAMPP installation :-(

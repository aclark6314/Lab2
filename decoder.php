<?php
$jsonData = get composer.json;
$phpArray = json_decode($jsonData);
print_r($phpArray);
foreach ($phpArray as $key => $value) { 
    echo "<p>$key | $value</p>";
}
?>

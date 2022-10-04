<!DOCTYPE html>  
<html>  
<body> 
<?php
$element = 'element.txt';
$input = file_get_contents($element);

$count_values = array();
foreach ($input as $a) {

     @$count_values[$a]++;

}
echo 'Duplicates count: '.count($count_values);
print_r($count_values);
?>  
</body>  
</html>  
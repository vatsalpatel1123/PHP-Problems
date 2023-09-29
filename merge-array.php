<?php
$arr1 = array(1, 2);
$arr2 = array(3, 4);

// arr2 elements are being pushed in the arr1.
$arr3 = array_merge($arr1, $arr2); 
array_push($arr1 , ...$arr2);
// echo gettype($arr1);
echo "arr1 = ";

// Use for each loop to print all the array elements.
foreach ($arr1 as $value) {
echo $value . ' ';
}
echo '\n';
echo "arr3 = ";

foreach ($arr3 as $value) {
    echo $value . ' ';
    }


    array_splice($arr3,2,1);
    print_r($arr3);

?>

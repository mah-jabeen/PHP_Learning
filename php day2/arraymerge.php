<?php
// array_merge() index or associative array
// array_merge_recursive() multidimensional associative array
// array_combine() index array
// doesnot make change in existing array

$food=array("orange","apple","banana","cherry");
$veggie=['carrot','pea'];
$newarray= array_merge($food,$veggie);
print_r($newarray);


// we can merge both index and associative array too
// if keys will be common so the values that are coming in second array will replace first arrays values


//array merge recursive works same as array merge but the difference will be that it will not replace same keys rather it will make seperate array for similar keys


// array combine will make first array key and it can only combine when no of values will be same in each array

?>
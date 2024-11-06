<?php

// in_array will give 1/0 and array_search will give index/key
$food=array("orange","apple","banana","cherry");
// first parameter is the term you want to search and second is the array
// echo in_array('apple', $food); //1

// first parameter is the term you want to search and second is in which  array
// echo array_search('apple', $food); //1 
// because it is an index array thats why it returned me index

// now we will apply to associative array
$food=array('a'=>"orange",'b'=>"apple",'c'=>"banana",'d'=>"cherry");
echo array_search('apple', $food); 

// array_replace for index or associative array
//  and array_replace_recursive for multidimensional associative array

?>

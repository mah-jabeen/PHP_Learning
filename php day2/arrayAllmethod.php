<?php
// array_key it returns arrays all keys in new array
// array_key_first it only returns first key of an array
// array_key_last it only returns last key of an array
// array_key_exist this use to search if some key exist in array or not 
// its shorthand is key_exists()

// $color=["red","pink","yellow","purple"];
// $newarray= array_keys($color); // we use it more with associative array
// print_r($newarray);

// $color=["first"=>"red",
// "second"=>"pink",
// "third"=>"yellow",
// "fourth"=>"purple"];
// $newarray= array_keys($color); 
// print_r($newarray);


// applying array key exist //returns two values 0 or 1
/// parameters key and array
// $newarray= array_key_exists("second",$color);
// print_r($newarray) ;


// array intersect
// array intersect is used when we want to find common values in two arrays array_intersect()
// you can also match key by array_intersect_key
// if you want to find both and make array on the basis of it you can use array_intersect_assoc

//values should be same also the datatype and it is case sensitive

// array_intersect_uassoc() which u is a function which is user define function
// it has three parameters two array and third is function
// weve to define function somewhere

// function compare($a, $b) {
//     if ($a === $b) {
// return 0; // 0 means two are match somehow //1 means a >b value //-1 is a<b
//     }
//     return ($a < $b)? 1:-1;

// }

// $a1=["red","pink","yellow","purple"];
// $a2=["red","pink","yellow","black"];
// $newarray= array_intersect_uassoc($a1,$a2,"compare");

// we ca n use php built in functions too

// print_r($newarray) ;


// will return new array
// Diff functions for taking out difference between two arrays
// array_diff for comparing values 

// will always give back difference of array 1
// array_diff_key for comparing keys

// this function works only with associative array
// array_diff_assoc

// array_udiff_uassoc()
// for above function we have to make two functions first function will compare values and other one will compare keys

// array_values( )
// if we want to take out values of an array only used with associative array


// array_unique it takes out only unique values and remoce duplicate values


// array_column(arrayname,thecolumnyouwanttomakenewarray)
// if we want take out one column values in each associative array and make it another array
// 


// array_chunk(array,sizeof($newarray)) ; 
// how many values you want to add it will make a pair of it
// you can also use preserved values it will show keys too

// functions
// array_flip 
// you can swap values and keys


// and array_change_key_case(array,case) case can be lower or upper
// we can change it in upper case if its in lower case
// default is lower case 

//  array_sum() can only sum integer or float values
//  array_product ($newarray) this makes product of numbers
//  only one parameter for bith which is array name

// array_rand(array,number->how many randome values you want) shows random array_values()

// shuffle(array)it shuffles an array


// array_fill_keys(index,number,value);
// filled key values for every key


// array_fill( index,howmany number of values, and the value)

// first one only works for index or associative array
//  works for printing values, we can;t take multiple arrays
// array_walk(array,function,parameter) is use if you want to run function each time for you each value

// this one works for multi dimensional array
// array_walk_recursiv(array, function,parameter);
// only difference is that you have to make a external function in  it

// $color=["first"=>"red",
// "second"=>"pink",
// "third"=>"yellow",
// "fourth"=>"purple"
// ];
// array_walk($color,"myfunction");
// function myfunction($value,$key){
//     echo "".$key." ".$value."<br>";
// }

// slightly same ass array_walk but difference is that it returns the value and multiple arrays can bbe used in it
// array_map()


// array_reduce(array,function,initial)
// if we want an array to run for each value and return single value for it
// we can give extra value through initial value


// array sorting function
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key
// array_reverse // will reverse and return new array to us
// array_multisort // both array size should be same
// natsort // natural order sort
//natcasesort( ) // this one is case sensitive


// Array traversing function
// prev()	Rewinds the internal array pointe
// next()	Advance the internal array pointer of an array
// end()	Sets the internal pointer of an array to its last element

// each()	Deprecated from PHP 7.2. Returns the current key and value pair from an array
// current()	Returns the current element in an array
// key()	Fetches a key from an array
// pos()	Alias of current() // means positon work as current
// reset()	Sets the internal pointer of an array to its first element



//  Array list() allows you to store multiple values of an array in just on line
// only works with numeric index or numeric keys
// works with index array and associative array with numeric key
// for this you  want to take as much variable, the ammount of values you want to store in it
// $color=array("pink","purple","yellow");
// list($a,$b,$c) = $color;
// echo "value of a:  $a <br>";
// echo "value of b:  $b <br>";
// echo "value of c:  $c <br>";

// we can do this like this too
// $color=array("pink","purple","yellow");
// list(,,$c) = $color;

// echo "value of c:  $c <br>";

// EXTR_OVERWRITE - Default. On collision, the existing variable is overwritten
// EXTR_SKIP - On collision, the existing variable is not overwritten
// EXTR_PREFIX_SAME - On collision, the variable name will be given a prefix
// EXTR_PREFIX_ALL - All variable names will be given a prefix
// EXTR_PREFIX_INVALID - Only invalid or numeric variable names will be given a prefix
// EXTR_IF_EXISTS - Only overwrite existing variables in the current symbol table, otherwise do nothing
// EXTR_PREFIX_IF_EXISTS - Only add prefix to variables if the same variable exists in the current symbol table
// EXTR_REFS - Extracts variables as references. The imported variables are still referencing the values of the array parameter
//extract(array, extract_rules, prefix) // it extracts the keys and converts it into a variable
// $color=["first"=>"red",
// "second"=>"pink",
// "third"=>"yellow",
// "fourth"=>"purple"
// ];
// extract($color);
// echo "value of first is: $first <br>";


// EXTR_OVERWRITE 
// $color=["first"=>"red",
// "second"=>"pink",
// "third"=>"yellow",
// "fourth"=>"purple"
// ];
// extract($color,EXTR_OVERWRITE );
// echo "value of first is: $first <br>";

// EXTR_PREFIX_SAME 
// $first = "orange";
// $color=["first"=>"red",
// "second"=>"pink",
// "third"=>"yellow",
// "fourth"=>"purple"
// ];
// extract($color,EXTR_PREFIX_SAME,"test" );
// echo "value of first is: $first <br>";
// echo "value of first is: $test_first <br>";
// echo "value of second is: $second <br>";
// echo "value of third is: $third <br>";
// in array EXTR_PREFIX_ALL you have to give prefix for all values of an array


// compact()
// $color=["first"=>"red",
// "second"=>"pink",
// "third"=>"yellow",
// "fourth"=>"purple"
// ];
// if this is the array you can make it through compact, in compact whatever the values name you want to give it will become parameter of compact(var1,var2,var3)
// you can also convert simple array into associative array through compact

$firstname = "mahjabeen";
$lastname = "javed";
$email = "hi";
$password = "password";
$password2 = "password";

$extra= ["password","password2"];
$newArray= compact("firstname","lastname","email","password",$extra);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>



<?php

// when we use list function in foreach loop we don't have to use nested loops
// $emp = [
//     [1,"mahi","employee",6000],
//     [2,"noor","hr",2000]

// ]; 

// foreach($emp as list($id,$name,$designation,$salary)){
// echo"".$id."".$name."".$designation.
// }

// associative array through listing
// $emp = [
//         [
//         "id"=>1,
//         "name"=>"mahi",
//         "designation"=>"ceo",
//         "salary"=>6000
//         ]
//         ,
//         [
//             "id"=>2,
//             "name"=>"noor",
//             "designation"=>"hr",
//             "salary"=>7000
//             ]
//         ];
//             // giving keys here
//  foreach($emp as list("id"=>$id,"name"=>$name,"designation"=>$designation,"salary"=>$salary)){
//  echo"".$id."".$name."".$designation."".$salary."";
//  }
// count() and sizeof() use to give arrays values

// on single array
// $food=array("orange","apple","banana","cherry");
// echo count($food); //4
// echo sizeof($food); //4

// on multidimensional array
//  $emp = [
//     "first"=> 
//             [
//             "id"=>1,
//             "name"=>"mahi",
//             "designation"=>"ceo",
//             "salary"=>6000
//             ]
//             ,
//             "second"=>
//             [
//                 "id"=>2,
//                 "name"=>"noor",
//                 "designation"=>"hr",
//                 "salary"=>7000
//                 ]
//             ];
// echo count($emp); //2
// echo count($ emp,1); //10
// echo count($emp['first'],1);

// array count value another function but it returns no value it returns an array
$food=array("orange","apple","banana","cherry");

print_r(array_count_values ($food));
// it counts each values seperately
?>
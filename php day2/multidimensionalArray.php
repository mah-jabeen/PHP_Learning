<?php
$emp = [
    [1,"mahi","employee",6000],
    [2,"noor","hr",2000]

]; 
// echo $emp[0][0]." ";
// echo $emp[0][1]." ";
// echo $emp[0][2]." ";
// echo $emp[0][3]." ";


// printing multidimensional with loop
// for ($row = 0; $row < 2; $row++) {
//     for ($col = 0; $col < 4; $col++) {
// echo $emp[$row][$col]." ";
//     }
// echo "<br";
// }

// by for each loop 
// foreach($emp as $v1){
//     foreach($v1 as $v2){
//         echo $v2." ";
//     } 
//     echo "<br";
// }


// for printing it inside table
echo "<table border='2px' cellpadding='5px'>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td> ";
    } 
    echo "<tr>";
}
echo "</table>";


// multidimentional assosiative array
$marks= [
    "mahi" => [
        "eng"=> 66,
        "urdu"=> 40,
        "phy"=> 80
    ],
    "majid" => [
        "eng"=> 66,
        "urdu"=> 40,
        "phy"=> 80
    ],
    "affan" => [
        "eng"=> 66,
        "urdu"=> 40,
        "phy"=> 80
    ]
]

// we can print it through for each as we've studied earlier 

// bellow function is used just for testing
print_r($marks);
?>
<?php  
// Parameter variadik karena bisa menampung semua argument  
function createArray(...$jurusan) {  
    $arr = []; // Corrected array initialization  
    foreach ($jurusan as $value) {  
        if (!in_array(strtoupper($value), $arr)) { // Simplified condition  
            array_push($arr, strtoupper($value));  
        }  
    }  
    return $arr; // Moved return statement inside the function  
}  

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl")); // Call the function after definition  
?>
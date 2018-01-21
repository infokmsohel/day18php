<?php

namespace App\classes;
class FullName
{
function makeFullName($data){
//    echo '<pre>';
//    print_r($data);

    $firstName=$data['first_name'];
    $lastName=$data['last_name'];
    $fullName=$firstName.' '.$lastName;

    return $fullName;

}
}
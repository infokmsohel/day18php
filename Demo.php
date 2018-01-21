<?php

namespace App\classes;
require_once 'Example.php'
class Demo extends Example
{
public $mobile='01674961086';
protected $district='Gazipur';
private $division='Dhaka';

public function newOne(){
//    echo 'In function new one';
    $this->one();
}

    protected function newTwo(){
        echo 'In function new Two';
    }

    private function newthree(){
        echo 'In function new Three';
    }
}
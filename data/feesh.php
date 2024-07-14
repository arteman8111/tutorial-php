<?php

function getMock($c) {
    $mock = [];
    for ($i=0; $i <$c; $i++){
        $item = [
            "param1"=>uniqid(),
            "param2"=>uniqid(),
            "param3"=>uniqid(),
            "param4"=>rand(),
            "param5"=>rand(),
        ];
        array_push($mock, $item);
    }
    return $mock;
}

$feesh = getMock(15);
return $feesh;
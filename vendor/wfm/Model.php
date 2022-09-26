<?php

namespace wfm;

abstract class Model
{

    public function conect()
    {
        return require CORE . '/dbConnect.php';
    }

    public function assoc($result){
        $array = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($array,$row);
        }
        return $array;
    }




}
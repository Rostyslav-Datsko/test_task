<?php
    $db = require CONFIG . '/config_db.php';
    $connect = mysqli_connect($db['servername'],$db['username'],$db['password'],$db['database']);
    if (!$connect){
        throw new \Exception("Missing connect to DB", 500 );
    }
return $connect;

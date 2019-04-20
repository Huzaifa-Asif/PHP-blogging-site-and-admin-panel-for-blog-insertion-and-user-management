<?php

$db['db_host'] = "localhost";
$db['db_user'] = "theaweb_cri";
$db['db_pass'] = "theaweb8580";
$db['db_name'] = "theaweb_cri";

foreach($db as $key => $value){

    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

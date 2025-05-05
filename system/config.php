<?php

$base_url = "http://localhost:81/cariuo/";
$base_dir = "/cariuo/";

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir,'',$tmp[0]);
unset($tmp);

$dbHost = 'localhost:81';
$dbName = 'mainsweeper';
$dbUsername = 'root';
$dbPassword = '';

<?php

$base_url = "http://localhost/foxsweeper/";
$base_dir = "/foxsweeper/";

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir,'',$tmp[0]);
unset($tmp);

$dbHost = 'localhost';
$dbName = 'mainsweeper';
$dbUsername = 'root';
$dbPassword = '';

<?php

session_start();

var_dump($_SESSION);
echo session_save_path();

// $_SESSION['first_session_value'] = 'Hello session';

$_SESSION['arr'] = ['one' => 'einz', 'two' => 'zwei'];

// PHPSESSID
// u3eag8f15dhl2rqvn1a1m55ef2
// first_session_value|s:13:"Hello session";
// first_session_value|s:13:"Hello session";arr|a:2:{s:3:"one";s:4:"einz";s:3:"two";s:4:"zwei";}
// $time = time() + 30 * 60; 

// // setcookie('test', 123); 

// setcookie('test3', 256, time() - 1);
// setcookie('test4', 512, time()+100000000000, '/form');
// var_dump($_COOKIE);








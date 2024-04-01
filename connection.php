<?php
error_reporting(E_ALL);
ini_set('display_errors','on');
$host='localhost';
$user='houseofd';
$password='Ca5ue3pi';
$database='houseofd_dreamh';
$con = mysqli_connect($host, $user, $password, $database) or die("Ошибка подключения " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8'");

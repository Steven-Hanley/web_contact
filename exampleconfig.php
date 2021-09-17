<?php

ob_start();
session_start();

defined("DB_HOST")? null: define("DB_HOST", "**********");//Insert MYSQL Host ip here
defined("DB_USER")? null: define("DB_USER", "**********");//Insert MYSQL username here
defined("DB_PASS")? null: define("DB_PASS", "**********");//Insert MYSQL password here
defined("DB_NAME")? null: define("DB_NAME", "**********");//Insert MYSQL table name here

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
    

?>
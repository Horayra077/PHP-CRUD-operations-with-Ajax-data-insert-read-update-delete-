<?php

$connection = mysqli_connect('localhost', 'root', '', 'phpajaxcrud_data');

if (!$connection) {
    die("Database connection failed");
}

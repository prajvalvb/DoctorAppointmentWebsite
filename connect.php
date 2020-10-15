<?php

define('DB_HOST','localhost');
define('DB_NAME','e-healthcare');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');

$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("cannot connect");


?>
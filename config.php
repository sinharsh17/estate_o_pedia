<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','estate_o_pedia');

$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if (!$conn) {
    # code...
    die('error while connecting to the database'.mysqli_connect_error());
}
else{
    echo "connected to database successfully";
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: jonatanmoerman
 * Date: 28/10/16
 * Time: 13:20
 */


function Connect()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "responses";

    // Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

    return $conn;
}

?>
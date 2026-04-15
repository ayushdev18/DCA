<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "root", "", "ayush");

include('user.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];



    $sql = "INSERT INTO ayushh(name,phone)
    VALUES ('$name','$phone')";

    $result = (mysqli_query($conn, $sql));
    if (!$result) {
        echo "not connected";
    } else {
        echo "connected";
    }
}

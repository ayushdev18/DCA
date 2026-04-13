<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "root", "", "laravel");

if (!$conn) {
    die("deadeed" . mysqli_connect_error());
} else {
    echo "success";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $password = $_POST['password'];


    $sql = " INSERT  INTO users (name,email,password)
VALUES ('$name','$email','$password')";
    echo (mysqli_query($conn, $sql));
    // echo "Data insert ho gaya 👍";
    // } else {
    //   echo "Error: " . mysqli_error($conn);
    //}
};

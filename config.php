<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = (mysqli_connect("localhost", "root", "", "ayush"));
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM ayush.ayushh  WHERE id= $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
}

?>

<form action="" method="post">
    Name: <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data['phone']; ?>"><br>

    <input type="submit" name="update" value="Update">

</form>



<?php
if (isset($_POST['update'])) {
    $name = $_GET['name'];
    $name = $_GET['phone'];
    $update = "UPDATE ayushh
    SET name='$name', phone='$phone'
    WHERE id=$$id ";



    $result = mysqli_query($conn, $update);
    if ($result) {
        echo "data updated susseccfully";
    } else {
        echo "not updated";
    }
}

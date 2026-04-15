<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require  "config.php";


?>



<body>
    <table border="3px">
        <tr>
            <td>name</td>
            <td>phone</td>
        </tr>
        <?php
        while ($fetchh = mysqli_fetch_assoc($data)) {

            echo " <tr>
        <td>" . $fetchh['name'] . "</td>
        <td>" . $fetchh['phone'] . "</td>
 
        </tr> ";
        } ?>
    </table>
</body>
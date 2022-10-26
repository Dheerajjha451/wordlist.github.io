<?php

    $username = "Your Server Username";
    $password = "Your Server Password";
    $server =  "localhost";
    $database = "Your Database Name";


    $connect = mysqli_connect($server,$username,$password,$database);

    if(!$connect){
        ?>
        <script>alert("Connection Failed");</script>
        <?php

    }
    



?>

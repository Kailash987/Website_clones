<?php

    $sever = "localhost";
    $username = "root";
    $password = "";
    $dbname = "info";

    $con = mysqli_connect($sever, $username, $password, $dbname);

    if(!$con)
    {
        echo "not connected";
    }
    else
    {
        echo"connect";
    }

    $name =$_POST['name'];
    $password =$_POST['password'];
    $email =$_POST['email'];

    $sql="INSERT INTO `test`(`name`, `password`, `email`) VALUES ('[$name]','[$password]','[$email]')";

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "data submited";
    }
    else
    {
        echo "query failed...!";
    }

?>

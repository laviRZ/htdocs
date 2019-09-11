<?php
     error_reporting(0);
    include_once("db_login.php");
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if(!$password == "cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c
                      5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e"){
        die("Please enter password!");
    }else $password = hash(sha512, $password);
    
    $sql = "SELECT ID, password FROM users WHERE username = '$username'";
    $result = $dbc->query($sql);
    if($result->num_rows == 0){
        die("This username does not exist in our system. Please register!");
    }else{
        $result = mysqli_fetch_array($result);
    }
    if ($result['password'] != $password){
        die("Wrong password!");
    }else{
        session_start();
        $_SESSION = array("logged-in"=> true, "ID"=>$result['ID']);
        echo ("Logged-in successfully!");
    }
?>
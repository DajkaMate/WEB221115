<?php
    function Connect(){
        $szerver  = "localhost";
        $user     = "root";
        $pass     = "";
        $dbname   = "14 sz2";

        $con = mysqli_connect($szerver,$user,$pass,$dbname);
        if(!$con){
            die("Nem sikerült csatlakozni");
        } /*else {
            echo "Sikerült";
        }*/  //csak teszteléshez, hogy sekerült-e?
        return $con;
    }
    //Connect(); csak teszteléshez, hogy sekerült-e?
?>
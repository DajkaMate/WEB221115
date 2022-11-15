<?php
    $content = "includes/main.php";

    if(isset($_GET["p"])){
        switch($_GET["p"]){
            case "all":
                $content = "includes/all.php";
                break;
            case "abc":
                $content = "includes/abc.php";
                break;
            case "kozseg":
                $content = "includes/kozseg.php";
                break;
            case "nagykozseg":
                $content = "includes/nagykozseg.php";
                break;
            case "varos":
                $content = "includes/varos.php";
                break;
            //Ez nem menü item
            case "adatlap":
                $content = "includes/adatlap.php";
                break;

        }
    }
?>
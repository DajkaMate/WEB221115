<?php
    $RowPerPage = 100;
    //Összes település
    function Pagination($RowPerPage){
        $con = Connect();
        $sql = "SELECT * FROM hnk";
        $result = mysqli_query($con,$sql);
        $DBRow = mysqli_num_rows($result);
        $NumPage = ceil($DBRow/$RowPerPage);
        return $NumPage;
        mysqli_close($con);
    }
    function All($RowPerPage){
        $con = Connect();
        if(!isset($_GET["page"])){
            $page = 1;
        } else {
            $page = $_GET["page"];
        }
        $limit = ($page-1)*100;
        $sql = "SELECT * FROM hnk LIMIT ".$limit.",".$RowPerPage;
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    //Adatlap
    function Adatlap(){
        $con = Connect();
        $id = $_GET["id"];
        $sql = "SELECT * FROM hnk WHERE id=".$id;
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    //HNK - ABC
    function Pagination_ABC(){
        $con = Connect();
        $sql = "SELECT DISTINCT LEFT('helyseg', 1) FROM hnk";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
        //Ezt nem használjuk, mert magyarok vagyunk
        //Angol db-nél használd
    }
    function ABC(){
        $con = Connect();
        if(!isset($_GET["betu"])){
            $betu = "a";
        } else {
            $betu = $_GET["betu"];
        }
        $sql = "SELECT * FROM hnk WHERE helyseg like '$betu%' ";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function Kozseg()
    {
        $con = connect();
        $sql = "SELECT * FROM hnk WHERE jogallas like 'község'";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function Nagykozseg()
    {
        $con = connect();
        $sql = "SELECT * FROM hnk WHERE jogallas like 'nagyközség'";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function Varos()
    {
        $con = connect();
        $sql = "SELECT * FROM hnk WHERE jogallas like '%Város' or jogallas like 'Megyeszékhely'";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }

    ?>
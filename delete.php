<?php 

include_once("connections/connection.php");
$con = connection();


 if (isset($_GET['delete'])){
        $id = $_GET['ID'];
        $sql= "DELETE FROM  list WHERE id = '$id'";
        $con->query($sql) or die ($con->error);
        
        echo header("Location: index.php");

    }
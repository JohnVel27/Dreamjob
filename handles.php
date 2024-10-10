<?php
require_once 'dbconfig.php';
require_once 'Datamodels.php';

if(isset($_POST['insertJobDreamerStudent'])){

    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $DreamJob = $_POST['DreamJob'];
    $YearLVL = $_POST['YearLVL'];

    $query = insertIntoDreamJobsStudent($pdo,$Firstname,$Lastname,$Email,$Gender,$DreamJob,$YearLVL);

    if($query){
        header("Location:../index.php");
    }
    else{
        echo "Query Failed";
    }

}



?>

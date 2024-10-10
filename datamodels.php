<?php
require_once 'dbconfig.php';

function insertIntoDreamJobsStudent($pdo,$Firstname,$Lastname,$Email,$Gender,$DreamJob,$YearLVL){
    $sql = "INSERT INTO jobdreamers (Firstname,Lastname,Email,Gender,DreamJob,YearLVL) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$Firstname,$Lastname,$Email,$Gender,$DreamJob,$YearLVL]);

    if($executeQuery){
        return true;
    }
}

?>

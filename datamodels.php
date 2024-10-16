<?php
require_once 'dbconfig.php';

function insertIntoDreamJobsStudent($pdo, $name, $email, $gender, $dreamjob) {
    // SQL query for inserting into the jobdreamers table
    $sql = "INSERT INTO jobdreamers (name, email, gender, dreamjob) VALUES (?, ?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);

    // Execute query and return success status
    return $stmt->execute([$name, $email, $gender, $dreamjob]);
}
?>

<?php
require_once 'dbconfig.php';  // Ensure this includes the database connection
require_once 'datamodels.php'; // Ensure correct casing for the filename

if (isset($_POST['insertjobdreamerstudentbtn'])) {
    
    // Sanitize and validate input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $dreamjob = filter_input(INPUT_POST, 'dreamjob', FILTER_SANITIZE_STRING);

    // Check for empty fields
    if (empty($name) || empty($email) || empty($gender) || empty($dreamjob)) {
        echo "All fields are required.";
        exit; // Stop further execution
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Insert into the database
    $query = insertIntoDreamJobsStudent($pdo, $name, $email, $gender, $dreamjob);

    if ($query) {
        header("Location: ../sql/insertjobdreamerstudent.php"); // Adjusted redirect
        exit; // Ensure no further code is executed after the redirect
    } else {
        echo "Query Failed: " . implode(", ", $pdo->errorInfo()); // Corrected to use $pdo
    }
}
?>


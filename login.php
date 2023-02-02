<?php

// Connect to the database
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"stockinfo");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Create the SQL query
    $sql = "SELECT * FROM admin WHERE user = '$username' AND password = '$password'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if a matching row was found
    if (mysqli_num_rows($result) == 1) {
        // Start a new session
        session_start();

        // Store the username in a session variable
        $_SESSION['user'] = $username;

        // Redirect to the dashboard page
        header("Location: ./dashboard/dashboard.php");
        exit;
    } else {
        // Show an error message
        echo "Username or password is incorrect.";
    }
}

?>
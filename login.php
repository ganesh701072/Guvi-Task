<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect the form data
    $username = $_POST["uname1"];
    $password = $_POST["upswd1"];

    // Create a database connection
    $host = "localhost";
    $dbusername = "exampleuser";
    $dbpassword = "examplepassword";
    $dbname = "guviproject";
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare a SQL query to check the user's credentials
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query returned a row
    if (mysqli_num_rows($result) == 1) {
        // Redirect the user to the home page
        header("Location: profile.html");
        exit();
    } else {
        // If the username or password is invalid, show an error message
        echo "Invalid username or password";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

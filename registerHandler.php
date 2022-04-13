<?php

// Save our Form Data
$firstName = $_POST["FirstName"];
$lastName = $_POST["LastName"];
$email = $_POST["Email"];

// Make sure posted Form Data is valid before inserting into the database
if($firstName == NULL || trim($firstName) == "")
{
    exit("First Name is a required field");
}
if($lastName == NULL || trim($lastName) == "")
{
    exit("Last Name is a required field");
}
if($email == NULL || trim($email) == "")
{
    exit("Email is a required field");
}

// Credentials for accessing the database
$servernameDb = "localhost";
$usernameDb = "root";
$passwordDb = "root";
$dbname = "register";

// Create connection
$conn = new mysqli($servernameDb, $usernameDb, $passwordDb, $dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// Insert HTML Form into usser table
$sql = "INSERT INTO users (FirstName, LastName, Email)
        VALUES ('" . $firstName . "', '" . $lastName . "', '" . $email. "')";
if ($conn->query($sql) === TRUE)
{
    echo "You are now registered.";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>


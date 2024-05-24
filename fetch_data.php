<?php
// Database connection parameters
$servername = "localhost";
$username = "millionjob";
$password = "vikram@plutus@007";
$dbname = "millionjob";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to fetch data from your database table
$sql = "SELECT * FROM plutusjob";

// Execute SQL query
$result = mysqli_query($link, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    // Return the data as JSON
    echo json_encode($data);
} else {
    echo "No job available";
}

// Close connection
mysqli_close($link);
?>

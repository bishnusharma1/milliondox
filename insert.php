<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
	<center>
<?php
session_start();

if (isset($_SESSION['form_submitted'])) {
    // If the form has already been submitted, don't display the form
    exit; // or any other action you want
}

/* Attempt MySQL server connection. */
$servername = "localhost";
$user = "millionweb";
$pass = "millionweb@7788990";
$dbname = "millionweb";

$link = mysqli_connect($servername, $user, $pass, $dbname);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Check if email already exists
    $check_sql = "SELECT * FROM notification WHERE email = '$email'";
    $result = mysqli_query($link, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        // Email already exists
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Email already exists!',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                }).then(() => {
                        window.location.href = 'https://milliondox.com/';
                    });
              </script>";
    } else {
        // Insert new record
        $sql = "INSERT INTO notification (name, email) VALUES ('$name', '$email')";
        
        if (mysqli_query($link, $sql)) {
            // Records inserted successfully
            $_SESSION['form_submitted_date'] = date('Y-m-d');
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Thank you for submitting the form!',
                        showConfirmButton: true,
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = 'https://milliondox.com/';
                    });
                  </script>";
        } else {
            // Error inserting records
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    $_SESSION['form_submitted'] = true;
}

// Close connection
mysqli_close($link);
?>




	</center>
</body>

</html>

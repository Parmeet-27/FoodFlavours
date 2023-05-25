<?php
// Retrieve form data
$username = $_POST['Username'];
$password = $_POST['password'];
$email = $_POST['Email'];
$host='localhost';
$user='root';
$pass='';
$dbname='foodflavours';

// SIgn in
// $username_signin = $_POST['signin_username'];
// $password_signin = $_POST['pass'];

// Validate and sanitize the input (e.g., check for empty fields, sanitize against SQL injection)

// Query the database to check if the username or email and password match
// You can use prepared statements or ORM libraries for secure database queries

// If the user is found and the password matches, set user session and redirect to the desired page
// Otherwise, display an error message or redirect to an error page

// Close the database connection


// Example of setting a session variable
// session_start();
// $_SESSION['username'] = $username; // Store the username in the session

// // Example of redirecting to another page
// header("Location: dashboard.php"); // Redirect to the dashboard page after successful login
// exit();

// // Example of displaying an error message
// echo "Invalid username/email or password. Please try again.";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$conn){
 die('Could not connect: '.mysqli_connect_error());
}
 echo 'Connected successfully<br/>';

// if (isset($_POST['signin'])) {
//     $sql = "select * form signup where Username='". $username_signin ."' and Password='".$password_signin."'";   
//     if(mysqli_query($conn, $sql)){
//         echo 'connected';
//     }

// } else{

 $sql = "INSERT INTO signup (Username, Pasword, Email) VALUES ('" . $username . "','" . $password . "','" . $email . "')";
 if(mysqli_query($conn, $sql)){
 echo "Record inserted successfully";
 }else{
 echo "Could not insert record: ". mysqli_error($conn);
//  }

}

 mysqli_close($conn);
?>
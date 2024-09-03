<?php
// Establishing connection with the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Collecting form data
  $name = $_POST['name'];
  $date = $_POST['date'];
  $email = $_POST['email'];
  $place = $_POST['place'];

  // Inserting form data into database
  $sql = "INSERT INTO booking_detail  (name, date, email, place)
  VALUES ('$name', '$date', '$email', '$place')";

  if (mysqli_query($conn, $sql)) {
    echo "Booking details stored successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}

// Closing the database connection
mysqli_close($conn);

?>

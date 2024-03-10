<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$menu = $_POST['menu'];
$drink = $_POST['drink'];
$attend = isset($_POST['attend']) ? 'Yes' : 'No'; // Check if the 'attend' checkbox is checked

// Save data to a file (for demonstration purposes)
$file = 'rsvp.txt';
$data = "Name: $name\nEmail: $email\nMenu Option: $menu\nDrink Option: $drink\nWill Attend: $attend\n\n";
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

// Redirect back to the RSVP page
header("Location: index.html");
exit();
?>
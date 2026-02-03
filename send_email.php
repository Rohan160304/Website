<?php
// Get form data
$name = $_POST['name'];
$phone = $_POST['phone_no'];
$shoot = $_POST['shoot'];
$other = $_POST['other'];
// $price1 = $_POST['price1'];
// $price2 = $_POST['price2'];
// $price3 = $_POST['price3'];
// $price4 = $_POST['price4'];
// $price5 = $_POST['price5'];

// $address= $_POST['address'];
// $pin = $_POST['pin'];
// $date = $_POST['date'];
// $days = $_POST['days'];
// $additional = $_POST['additional'];
$email = $_POST['email'];
$result = $_POST['result'];
// Set email parameters
$to = 'rahulnevge123@gmail.com'; // Change this to your email address
$subject = 'Booking details';
// $body = "Name: $name\nEmail: $email\nPhone: $phone\nSHoot Type: $shoot\nPrice: $price1 $price2 $price3 $price4 $price5\nAddress: $address
//         \nPin: $pin\nDate: $date\nDays: $days\nAdditional: $additional";
$body = $result;
$headers = "From: $email";

// Send email
$mailSent = mail($to, $subject, $body, $headers);

// Check if mail was sent successfully
if ($mailSent) {
    echo 'success';
} else {
    echo 'error';
}
?>
<?php
session_start();
$_SESSION['errors'] = [];
$valid = true;

//function to sanitize data input
function sanitize($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

//name validation
$name = sanitize($_POST['name']);
if(empty($name) || !preg_match("/^[a-zA-Z\s]+$/", $name)) {
    $_SESSION['errors']['name'] = "Name is required and can only contain letters and spaces.";
    $valid=false;
}

//email validation
$email = sanitize($_POST['email']);
if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['errors']['email'] = "Valid email is required.";
    $valid=false;
}

// phone number validation
$phone = sanitize($_POST['phone']);
if(empty($phone) || !preg_match("/^[0-9]{10}$/", $phone)) {
    $_SESSION['errors']['phone'] = "Phone number must be exactly 10 digits.";
    $valid=false;
}else{
    // Add the +63 prefix for storing
    $phone = '+63' . $phone;
}

//password validatoin 
$password = $_POST['password'];
if(empty($password) || strlen($password) < 8 || !preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password) || !preg_match("/[A-Z]/", $password)) {
    $_SESSION['errors']['password'] = "Password must be at least 8 characters long and contain at least 1 uppercase letter and 1 number.";
    $valid=false;
}

//confirm password
$confirm_password = $_POST['confirm_password'];
if($confirm_password != $password) {
    $_SESSION['errors']['confirm_password'] = "Passwords do not match.";
    $valid=false;
}

//gender validation 
$gender = isset($_POST['gender']) ? sanitize($_POST['gender']) : "";
if(empty($gender)) {
    $_SESSION['errors']['gender'] = "Gender is required.";
    $valid=false;
}

//country selection validation 
$country = sanitize($_POST['country']);
if(empty($country)) {
    $_SESSION['errors']['country'] = "Please select a country.";
    $valid=false;
}

//skill validation
$skills = isset($_POST['skills']) ? $_POST['skills'] : [];
if(empty($skills)) {
    $_SESSION['errors']['skills'] = "At least one skill must be selected.";
    $valid=false;
}

// biography validation
$bio = sanitize($_POST['bio']);
if(empty($bio) || strlen($bio) > 200) {
    $_SESSION['errors']['bio'] = "Biography is required and must be less than 200 characters.";
    $valid=false;
}


//redirection to index.php if form is invalid
if(!$valid) {
    header('Location: index.php');
    exit();
}

//redirection to about.php if all fields are successfully done
$_SESSION['input'] = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'gender' => $gender,
    'country' => $country,
    'skills' => $skills,
    'bio' => $bio
];
header('Location: about.php');

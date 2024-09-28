<?php
session_start();
if(!isset($_SESSION['input'])) {
    header('Location: index.php');
    exit();
}
$input = $_SESSION['input'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me Page</title>
    <!-- Bootstrap 5 CSS -->
<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 w-25">
        <div class="row p-3 border rounded bg-light">
        <h2>Registered User Information</h2>
        <p><strong>Name:</strong> <?= htmlspecialchars($input['name']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($input['email']) ?></p>
        <p><strong>Phone:</strong> <?= htmlspecialchars($input['phone']) ?></p>
        <p><strong>Gender:</strong> <?= htmlspecialchars($input['gender']) ?></p>
        <p><strong>Country:</strong> <?= htmlspecialchars($input['country']) ?></p>
        <div class="container d-flex mb-2">
        <div>

        <strong>Skills:</strong> <?php foreach($input['skills'] as $skill){
           echo "<li class='mx-5'>$skill</li>"; 
        }?>
        </div>
        </div>

        <p><strong>Biography:</strong> <?= htmlspecialchars($input['bio']) ?></p>

        <div class="container d-flex my-2">
        <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>

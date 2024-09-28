<?php
session_start();
if(!isset($_SESSION['data'])) {
    header('Location: index.php');
    exit();
}
$data = $_SESSION['data'];
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
        <p><strong>Name:</strong> <?= htmlspecialchars($data['name']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($data['email']) ?></p>
        <p><strong>Phone:</strong> <?= htmlspecialchars($data['phone']) ?></p>
        <p><strong>Gender:</strong> <?= htmlspecialchars($data['gender']) ?></p>
        <p><strong>Country:</strong> <?= htmlspecialchars($data['country']) ?></p>
        <p><strong>Skills:</strong> <?= implode(", ", $data['skills']) ?></p>
        <p><strong>Biography:</strong> <?= htmlspecialchars($data['bio']) ?></p>
        <div class="container d-flex">
        <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>

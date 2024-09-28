<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <form action="validation.php" method="post" novalidate>

            <div class="row p-3 border rounded bg-light">

                <h2 class="fw-bold">Registration Form</h2>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Name</label>
                        <input type="text" class="form-control " id="" name="name" placeholder="Name">
                        <?php if (isset($_SESSION['errors']['name'])) {
                            echo '<div
                                class="mt-1 alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            
                                <small>'.$_SESSION['errors']['name'] . '</small></div>';
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="" name="email" placeholder="email@example.com">
                        <?php if (isset($_SESSION['errors']['email'])) {
                            echo '<div
                                class="mt-1 alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            
                                <small>'.$_SESSION['errors']['email'] . '</small></div>';
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text">+63</span>
                            <input type="text" class="form-control" id="" name="phone" maxlength="10"
                                placeholder="Enter 10 digits">
                        </div>
                        <?php if (isset($_SESSION['errors']['phone'])) {
                            echo '<div
                                class="mt-1 alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            
                                <small>'.$_SESSION['errors']['phone'] . '</small></div>';
                        }
                        ?>
                    </div>


                    <div class="mb-3">
                        <label class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="" name="password">
                        <?php if (isset($_SESSION['errors']['password'])) {
                            echo '<div
                                class="mt-1 alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            
                                <small>'.$_SESSION['errors']['password'] . '</small></div>';
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Confirm Password</label>
                        <input type="password" class="form-control" id="" name="confirm_password">
                        <?php if (isset($_SESSION['errors']['confirm_password'])) {
                            echo '<div
                                class="mt-1 alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            
                                <small>'.$_SESSION['errors']['confirm_password'] . '</small></div>';
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold fw-bold">Gender</label>
                        <div class="form-check">
                            <input class="border-dark-subtle" type="radio" name="gender" id="" value="Male" />
                            <label class="form-check-label">Male</label>
                        </div>

                        <div class="form-check">
                            <input class="border-dark-subtle" type="radio" name="gender" id="" value="Female" />
                            <label class="form-check-label">Female</label>
                        </div>

                        <?php if (isset($_SESSION['errors']['gender'])) {
                            echo '<div
                                class="mt-1 alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            
                                <small>'.$_SESSION['errors']['gender'] . '</small></div>';
                        }
                        ?>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Country</label>
                        <select name="country" id="" class="form-select">
                            <option value="">Select Country</option>
                            <option value="Philippines">Philippines</option>
                            <option value="USA">USA</option>
                            <option value="China">China</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Russia">Russia</option>
                        </select>
                        <?php if (isset($_SESSION['errors']['country'])) {
                            echo '<div
                                class="mt-1 alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            
                                <small>'.$_SESSION['errors']['country'] . '</small></div>';
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Skills</label><br>
                        <div class="form-check">
                        <input type="checkbox" name="skills[]" value="Web Development "> Web Development 
                        </div>
                        <div class="form-check">
                        <input type="checkbox" name="skills[]" value="Network Administration"> Network Administration
                        </div>

                        <div class="form-check">
                        <input type="checkbox" name="skills[]" value="Database Management"> Database Management 
                        </div>

                        <div class="form-check">
                        <input type="checkbox" name="skills[]" value="Mobile Application Development"> Mobile Application Development
                        </div>

                        <?php if (isset($_SESSION['errors']['skills'])) {
                            echo '<div
                                class="mt-1 alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            
                                <small>'.$_SESSION['errors']['skills'] . '</small></div>';
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Biography</label>
                        <textarea class="form-control" name="bio" id="" rows="3"></textarea>
                        <?php if (isset($_SESSION['errors']['bio'])) {
                            echo '<div
                                class="mt-1 alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close primary btn-sm"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            
                                <small>'.$_SESSION['errors']['bio'] . '</small></div>';
                        }
                        ?>
                    </div>

                    <div class="container">
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary ms-auto fw-bold">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php session_destroy();?>
    <!-- Bootstrap 5 JS Bundle -->
    <script src="./assets/js/bootstrap.bundle.js"></script>
</body>

</html>
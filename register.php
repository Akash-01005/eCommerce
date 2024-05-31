<?php
session_start();
include('./server/connection.php');

if (isset($_POST['register'])) {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $pass = $_POST['pass'];
    $cp = $_POST['cpass'];

    // Check if passwords match
    if ($pass != $cp) {
        header("Location: register.php?error=Passwords do not match");
        exit();
    }

    // Check if password length is at least 6 characters
    if (strlen($pass) < 6) {
        header("Location: register.php?error=Password should contain at least 6 characters");
        exit();
    }

    // Check if user already exists
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE user_email = ?");
    $stmt->bind_param('s', $e);
    $stmt->execute();
    $stmt->bind_result($num_rows);
    $stmt->fetch();
    $stmt->close();

    if ($num_rows > 0) {
        header("Location: register.php?error=User already exists");
        exit();
    }

    // Insert new user into the database
    $stmt = $conn->prepare("INSERT INTO users (user_name, user_email, user_password) VALUES (?, ?, ?)");
    $hashed_pass = md5($pass); // MD5 is not recommended for password hashing; use password_hash instead
    $stmt->bind_param('sss', $n, $e, $hashed_pass);

    if ($stmt->execute()) {
        $uid=$st->$insert_id;
        $_SESSION['user_id']=$uid;
        $_SESSION['user_email'] = $e;
        $_SESSION['user_name'] = $n;
        $_SESSION['logged_in'] = true;
        $stmt->close();
        header("Location: account.php?register_sucsess=You registered successfully");
        exit();
    } else {
        $stmt->close();
        header("Location: register.php?error=Could not create an account at the moment");
        exit();
    }
}
else if(isset($_SESSION['logged_in'])){
  header("location: account.php ");
  exit;
}

?>
<?php include('./layouts/header.php'); ?>
<section class="my-5 py-5">
    <div class="container d-flex flex-column align-items-center">
        <div class="text-center mb-4">
            <h1 class="display-4">Register</h1>
        </div>
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">
            <form action="register.php" id="register-form" method="POST" class="needs-validation" novalidate>
                <p class="text-danger text-center"><?php if(isset($_GET['error'])) { echo $_GET['error']; } ?></p>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Name" required>
                    <div class="invalid-feedback">Please enter your name.</div>
                </div>
                <div class="mb-3">
                    <label for="login-email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-lg" id="login-email" name="email" placeholder="Email" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
                <div class="mb-3">
                    <label for="login-password" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg" id="login-password" name="pass" placeholder="Password" required>
                    <div class="invalid-feedback">Please enter your password.</div>
                </div>
                <div class="mb-4">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control form-control-lg" id="confirm-password" name="cpass" placeholder="Confirm Password" required>
                    <div class="invalid-feedback">Please confirm your password.</div>
                </div>
                <div class="d-grid mb-3">
                    <input type="submit" class="btn btn-primary btn-lg" id="register-btn" value="Register" name="register">
                </div>
                <div class="text-center">
                    <a href="login.php" id="register-url" class="text-decoration-none">Do you have an account? Login</a>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include('./layouts/footer.php'); ?>


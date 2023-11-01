<?php
session_start();
require '../conn/koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided username and password match the admin credentials
    if ($username === 'halodunia' && $password === 'php') {
        $_SESSION['login'] = true;
        header("location: data.php");
        exit;
    } else {
        $error = true;
    }
}

// If an error occurred, display an alert using JavaScript
if (isset($error) && $error === true) {
    echo '<script>alert("password or username is invalid, please try again");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabina Aurelia</title>
    <link rel="stylesheet" href="../style/form.css"> 
</head>
<body>
    <div class="container">
        <div class="box form-box">
           <center> <h1>Masuk</h1></center>
           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <div class="input">
                    <label for="">Username : </label>
                    <input name="username" type="text" placeholder="Username" required>
            </div>
            <div class="input">
                    <label for="">Password : </label>
                    <input name="password" type="password" placeholder="Password"required>
            </div>
            <div class="field">
            <input type="submit" value="Masuk" name="login" class="btn">
            </div>
        </form>
        </div>
    </div>
</body>

</html>



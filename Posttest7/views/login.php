<?php 
session_start();
require "../conn/koneksi.php";

if(isset($_POST['masuk'])){
  $name = $_POST['username'];
  $pass = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$name' ");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($pass, $row['password'])) {
        $_SESSION['login'] = true;
        header("Location: data2.php");
        exit;
    }
}

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/form.css">
</head>

<body>
    <div class="container">
        <div class="box form-box">
           <center> <h1>Masuk</h1></center>
            <hr>
            <?php if (isset($error)) {
                echo "<p style='color: red;'>Username atau Password Salah!</p>";
            }
            ?>

            <form action="" method="post">
                <div class="input">
                    <label for="">Username : </label>
                    <input type="text" name= "username" id="username" required>
                </div>
                <div class="input">
                    <label for="">Password : </label>
                    <input type="password" name= "password" id="password" required>
                </div>
                <div class="remember">
                    <input type="checkbox" name="remember" value="true">
                    <label for="remember">Ingat username ini</label>
                </div>
                <div class="field">
                <input type="submit" name="masuk" value="Masuk" class="btn">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
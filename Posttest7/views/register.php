<?php 
require '../conn/koneksi.php';

if(isset($_POST['daftar'])){
 $name = $_POST['username'];
 $pass = $_POST['password'];
 $cpass = $_POST['cpassword'];

 if($pass === $cpass){
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $result = mysqli_query($conn,"SELECT username from user WHERE username = '$name'" );

    if(mysqli_fetch_assoc($result)){
        echo "
        <script>
        alert('Username sudah ada nder!');
        document.location.href = 'register.php';
            </script>";
    }else{
        $result = mysqli_query($conn, "INSERT INTO user VALUES ('','$name', '$pass')");
        //hasil returnnya 1 atau 0
        if(mysqli_affected_rows($conn)>0){
            echo "
        <script>
        alert('Registrasi berhasil!');
        document.location.href = 'login.php';
            </script>";
        }else{
            echo "
            <script>
            alert('Registrasi Gagal!');
            document.location.href = 'register.php';
                </script>";
        }
    }
} else{
    echo "
        <script>
        alert('Password tidak sama nder!');
        document.location.href = 'register.php';
            </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
           <center><h1>Daftar</h1><hr></center>
            <form action="" method="post">
            <div class="input">
                    <label for="">Username : </label>
                    <input type="text" name= "username" id="username" required>
                </div>
                <div class="input">
                    <label for="">Password : </label>
                    <input type="password" name= "password" id="password" required>
                </div>
                <div class="input">
                <label for="">Confirm your password : </label>
                <input type="password" name="cpassword" placeholder="Konfirmasi Password" class="textfield" required>
                </div>
                <div type= "password">
                    <label for="remember">Ingat username ini</label>
                    <input type="checkbox" name="remember" value="true">
                </div>
                <input type="submit" name="daftar" value="Daftar" class="btn">
                <p>already have an account? <a href="login.php">login now</a></p>

            </form>
        </div>
    </div>
</body>
</html>
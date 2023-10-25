<?php
if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $pw = $_POST['password'];
} else {
    echo "Tidak bisa mengakses website";
    die();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/loginstyle.css">
    <title>Login</title>
</head>
<!-- <input type="checkbox" name="" id="toggler"> -->
    <div class="title" align = "center"><b>r e m beauty</b></div> 
        </div>
<body>
<section class="section">
      <div class="section__container">
        <div class="content">
          <p class="subtitle">Holla!</p>
          <h1 class="title">
            <span><?= $uname ?></span><br>
          </h1>
          <p class="description">
            <b>Welcome  to  r e m!</b>
          </p>
          <a href="index.php"><div class="action__btns">
            <button class="button" type="button">Home</button>
          </div></a>
          </div>
        <div class="image">
          <img src="../Photos/arianagrande.webp" alt="profile" />
        </div>
      </div>
      <section>
</body>

</html>
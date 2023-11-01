<?php

    session_start();
    include('../conn/koneksi.php');

    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }
    if (isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $result = mysqli_query($conn, "SELECT * FROM produkrem WHERE category LIKE '%$keyword%'");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM produkrem");
    }
    $rem = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rem[] = $row;
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REM DATA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../style/data.css">

</head>

<body>

    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <nav class="navbar">
            <a href="../views/index.php">Home</a>
            <a href="../views/aboutme.php">About Me</a>
            <a href="../views/loginadmin.php">Data</a>
            <a href="../views/data2.php">Shop</a>
        </nav>
        <div class="logo">
            <img src="../Photos/remnew.jpeg" alt="" width="200px">
        </div>
        <div class="icons">
            <a href="" class="fas fa-shopping-cart"></a>
        </div>
        <div class="moon">
            <img src="../Photos/darkmode.png" id="icon">
            </div>
        <div class="icons">
            <a href="../views/register.php" class="fas fa-user-alt"></a>
        </div>
        <div class="icons">
            <a href="../views/logout.php" class="fas fa-sign-out-alt"onclick="return confirm('Yakin ingin keluar?')"></a>
        </div>
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br>
    <center>
        <h3>Current time: <?php date_default_timezone_set("Asia/Makassar");
                            echo date("l Y-m-d H:i:s") ?></h3>
    </center>
    <br><br><br>
    <center>
        <h1>OUR PRODUCT</h1>
    </center>
    <br><br><br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Category</th>
                <th>Product</th>
                <th>Price</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * from produkrem order by id asc";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query Error: " . mysqli_errno($conn) . "-" . mysqli_error($conn));
            }
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td>Rp<?php echo number_format($row['price'], 0, ',', '.'); ?></td>
                    <td><img src="../img/images/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>" width="100"></td>
                    <td><a href="">Tambah</a> </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggler = document.getElementById("toggler");
            const navbar = document.querySelector(".navbar");

            toggler.addEventListener("change", function() {
                if (this.checked) {
                    navbar.style.clipPath = "polygon(0 0, 100% 0, 100% 100%, 0 100%)";
                } else {
                    navbar.style.clipPath = "polygon(0 0, 100% 0, 100% 0, 0 0)";
                }
            });
        });
    </script>
    <script>
        const icon = document.getElementById("icon");
        icon.addEventListener("click", function() {
            document.body.classList.toggle("dark-theme");
            if (document.body.classList.contains("dark-theme")) {
                icon.src = "../Photos/lightmode.png";
            } else {
                icon.src = "../Photos/darkmode.png";
            }
        });
    </script>
</body>

</html>
<?php require "../conn/koneksi.php";
if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $nama = $_POST['nama'];
    $harga = $_POST['price'];
    $gambar = $_FILES['gambar']['name'];
    // date_default_timezone_set('asia/makassar');
    // $tanggal = date("Y-m-d_h-i-s_");

    if ($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $gambar_baru = date("Y-m-d") . '-' . $gambar;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../img/images/' . $gambar_baru);

            $query = "INSERT INTO produkrem (category, nama, price, gambar) VALUES ('$category', '$nama', '$harga','$gambar_baru')";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Querry Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
                echo "<script>document.location.href='data.php'</script>";
            } else {
                echo "<script>alert('Data berhasil ditambahkan!);window.location='data.php';</script>";
                echo "<script>document.location.href='data.php'</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='tambah.php;</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REM DATA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../style/data.css">

</head>

<body>

    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <nav class="navbar">
            <a href="../views/index.php">Home</a>
            <a href="../views/form.php">Login</a>
            <a href="../views/aboutme.php">About Me</a>
            <a href="../views/data.php">Data</a>
            <a href="#Shop">Shop</a>
        </nav>
        <div class="logo">
            <img src="../Photos/remnew.jpeg" alt="" width="200px">
        </div>
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>
        <div class="moon">
            <img src="../Photos/darkmode.png" id="icon">
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br>
    <center>
        <h1>DATA PRODUCT</h1>
    </center>

    <form action="" method="POST" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Category</label>
                <input type="text" name="category" autofocus="" required="">
            </div>
            <div>
                <label>Products</label>
                <input type="text" name="nama" required="">
            </div>
            <div>
                <label>Price</label>
                <input type="text" name="price" required="">
            </div>
            <div>
                <label>Picture</label>
                <input type="file" name="gambar" required="">
            </div>
            <div>
                <button type="submit" name="submit">Save Data</button>
            </div>
        </section>
    </form>
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
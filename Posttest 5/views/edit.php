<?php include('koneksi.php');
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $nama = $_POST['name_product'];
    $harga = $_POST['price'];
    $gambar = $_FILES['gambar']['name'];
    if ($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar_produk);
        $ekstensi = strtolower(end($x));
        $file_temp = $_FILES['gambar']['tmp_name'];
        $angka_acak = rand(1, 999);
        $gambar_baru = $angka_acak . '-' . $gambar;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_temp, '../img/' . $gambar_baru);

            $query = "INSERT INTO produk (category, name_product, price, gambar) VALUES ('$category', '$nama', '$harga','$gambar_baru')";
            $result = mysqli_query($koneksi, $query);

            if (!$result) {
                die("Querry Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                echo "<script>document.location.href='data.php'</script>";
            } else {
                echo "<script>alert('Data berhasil ditambahkan!);window.location='data.php';</script>";
                echo "<script>document.location.href='data.php'</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='tambah_produk.php;</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../style/basket.css">
    <title>Eit Data REM</title>
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <nav class="navbar">
            <a href="./index.php">Home</a>
            <a href="../views/form.php">Login</a>
            <a href="../views/aboutme.php">About Me</a>
            <a href="#Shop">Shop</a>
            <a href="./data.php">Data</a>
        </nav>
        <div class="logo">
            <img src="../Photos/remnew.jpeg" alt="" width="200px">
        </div>
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>
    </header>
    <br><br><br><br><br><br>
    <center>
        <h1>Edit</h1>
    </center>
    <form method="POST" action="prosestambah.php" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Category</label>
                <input type="text" name="category" autofocus="" required="" />
            </div>
            <div>
                <label>Nama</label>
                <input type="text" name="name_product" />
            </div>
            <div>
                <label>Harga</label>
                <input type="text" name="price" required="" />
            </div>
            <div>
                <button type="submit" name="submit">Simpan Produk</button>
            </div>
        </section>
    </form>
    </body>

</html>
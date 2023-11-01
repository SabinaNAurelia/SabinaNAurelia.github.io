<?php include('../conn/koneksi.php'); 
$id = $_GET['id'];

$query = "SELECT * FROM produkrem WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

     if(isset($_POST['submit'])) {
        $category = $_POST['category'];
        $nama = $_POST['nama'];
        $harga = $_POST['price'];
        $gambar = $_FILES['gambar']['name'];
        // Hapus gambar kalau kotak centang "Hapus Gambar" diklik
    if (isset($_POST['hapus_gambar']) && $_POST['hapus_gambar'] == 1) {
        $gambar_lama = '../images/images/' . $data['gambar'];
        if (file_exists($gambar_lama)) {
            unlink($gambar_lama);
        }
        // Hapus nama gambar produk dari database setelah dipencet submit
        $hapus_gambar = "UPDATE produkrem SET gambar = NULL WHERE id = $id";
        $result_hapus_gambar = mysqli_query($conn, $hapus_gambar);
    }

 
     if($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $gambar_baru = date("Y-m-d") . '-' . $gambar;
 
         if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
             move_uploaded_file($file_tmp, '../img/images/'.$gambar_baru);
 
            //  $query = "UPDATE produk (nama_produk, deskripsi, harga_beli, harga_jual, gambar_produk) VALUES ('$nama_produk', '$deskripsi', '$harga_beli', '$harga_jual', '$nama_gambar_baru')";
             $query = "UPDATE produkrem SET category ='$category', nama = '$nama', price = '$harga', gambar = '$gambar_baru' WHERE id=$id";
             $result = mysqli_query($conn, $query);
 
             if(!$result) {
                 die("Querry Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
                 echo"<script>document.location.href='data.php'</script>";
 
                } else {
                    echo "<script>alert('Data berhasil ditambahkan!);window.location='data.php';</script>";
                    echo"<script>document.location.href='data.php'</script>";
                }
        } else {
            echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='tambah_produk.php;</script>";
        }
    } else {
       $query = "UPDATE produkrem SET category ='$category', nama = '$nama', price = '$harga' WHERE id=$id";
       $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($koneksi));
            echo "<script>document.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data berhasil diperbarui!');window.location='data.php';</script>";
            echo "<script>document.location.href='data.php'</script>";
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
    <style>
            .hapus-gambar-checkbox {
        display: inline-block;
        align-items: left;
        width:30px;
    }
    </style>

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
        </div>
        <div class="icons">
            <a href="../views/register.php" class="fas fa-user-alt"></a>
        </div>
        <div class="icons">
            <a href="../views/logout.php" class="fas fa-sign-out-alt" onclick="return confirm('Yakin ingin keluar?')"></a>
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br>
   
       <center><h1>Edit Data</h1></center>
       <form action="" method="POST" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Category</label>
                <input type="text" name="category" autofocus="" required="" value="<?php echo $data['category']; ?>">
            </div>
            <div>
                <label>Products</label>
                <input type="text" name="nama" required="" value="<?php echo $data['nama']; ?>">
            </div>
            <div>
                <label>Price</label>
                <input type="text" name="price" required=""value="<?php echo $data['price']; ?>">
            </div>
             <div>
                <label>Gambar Produk Baru</label>
                <input type="file" name="gambar" />
                <label>Gambar Lama</label>
                <?php if ($data['gambar'] != ""): ?>
                <img src="../img/images/<?php echo $data['gambar']; ?>" alt="Gambar Produk" width="100" height="100"> 
                <br><input class="hapus-gambar-checkbox" type="checkbox" name="hapus_gambar" value="1"/>Klik Untuk Setuju Hapus Gambar.
                <?php endif; ?>

                </div>
            <div>
                <button type="submit" name="submit">Save Data</button>
            </div>
        </section>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggler = document.getElementById("toggler");
            const navbar = document.querySelector(".navbar");
    
            toggler.addEventListener("change", function () {
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
   
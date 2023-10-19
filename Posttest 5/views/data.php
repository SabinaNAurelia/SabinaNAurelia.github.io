<?php include('../aksi/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
     referrerpolicy="no-referrer" />">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../style/basket.css">
</head>

<body>

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

    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center><h1>Data REM</h1></center>
    <br><br>
    <center><a href="tambah.php">+ &nbsp; Tambah Data</a></center>
    <br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Category</th>
                <th>Nama</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM basket_table ORDER BY id";
            $result = mysqli_query($koneksi, $query);

            if (!$result) {
                die("Querry Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
            }
            $no = 1;

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo substr($row['name_product'], 0, 50); ?>...</td>
                    <td>Rp <?php echo number_format($row['price'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="../views/edit.php?id=<?php echo $row['id'];?>">Edit</a>
                        <a href="../views/hapus.php?id=<?php echo $row['id'];?>"onclick ="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>
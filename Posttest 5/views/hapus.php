<?php include('../aksi/koneksi.php');
    $id = $_GET['id'];
    $query = "DELETE FROM basket_table where id ='$id'";
    $result = mysqli_query($koneksi, $query);

    if(!$result) {
        die("Querry Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        echo"<script>document.location.href='data.php'</script>";

    } else {
        echo "<script>alert('Data berhasil dihapus!);window.location='data.php';</script>";
        echo"<script>document.location.href='data.php'</script>";
}

?>
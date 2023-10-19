TAMBAH DATA

<?php include('../aksi/koneksi.php'); 
     $result = mysqli_query($koneksi, "SELECT * FROM basket_table");
     $basket_table= [];
     while ($row = mysqli_fetch_assoc($result)) {
         $basket_table[] = $row;
     }
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
       <center><h1>Tambah Produk</h1></center>
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
               <label>Price</label>
               <input type="text" name="price" required="" />
           </div>
           <div>
               <button type="submit" name="submit">Save</button>
           </div>
       </section>
       </form>
   </body>
   </html>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabina Aurelia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
     referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style2.css">
   
    
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
            <img src="../Photos/remnew.jpeg" alt="" width="200px" >
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
            <a href="../views/logout.php" class="fas fa-sign-out-alt" onclick="return confirm('Yakin ingin keluar?')"></a>
        </div>
    </header>

<section class="home" id="home">
    <div class="content">
        <h3 id="h3"></h3>
        <span>"a total game changer"</span>
        <p>Makeup made to feel good in, <br>without hiding what makes you unique</p>
            <a href="../views/data2.php" class="btn">shop now</a>
    </div>
</section>

<section class="products" id="products">
    <h1 class="header">rem Beauty</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="../Photos/parfume.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="card-btn">Parfume Collection</a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
            
        </div>

        <div class="box">
            <div class="image">
                <img src="../Photos/lip.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="card-btn">Lip Series</a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>

        </div>

        <div class="box">
            <div class="image">
                <img src="../Photos/eye.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="card-btn">Eye Makeup </a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="../Photos/r.e.m.jpeg" alt="">
            </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-container">
            <div class="row">
                <div class="col">
                    <div class="single_footer single_footer_address">
                        <h4>R.E.M BEAUTY</h4>
                        <ul>
                            <li><a href="https://www.grand-indonesia.com/maps/">Sephora, Jakarta, Indonesia</a></li>
                        </ul>
                    </div>
                </div>
            
                    <div class="social_profile">
                        <ul>
                            <li><a href="https://x.com/rembeauty?s=21&t=PZ8uQ54bvg9wXVSe_KvxcQ"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/r.e.m.beauty?igshid=MzRlODBiNWFlZA==/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://rembeauty.com/"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <p class="copyright">Copyright &copy; 2023 <a href="#">rembeauty</a></p>
                </div>
            </div>
        </div>
    </div>
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
    <script src="../js/main.js"></script>
    <script>
        const icon = document.getElementById("icon");
        icon.addEventListener("click", function () {
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
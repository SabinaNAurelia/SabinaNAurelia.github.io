<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href ="../style/formstyle.css">
    <title>Account</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <!-- <div class="title" align = "center"><b>Sabina Aurelia</b></div>  -->
            <header><div class="title" align = "center"><b>Login</b></div> </header>
            
            <form action="login.php" method="post">
                <div class="input">
                    <label for="">Username : </label>
                    <input type="text" name= "username" id="username" required>
                </div>
                <div class="input">
                    <label for="">Password : </label>
                    <input type="password" name= "password" id="password" required>
                </div>
                <div class="input">
                    <label for="">Birthday date : </label>
                    <input type="date" name= "birthday" id="birthday" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
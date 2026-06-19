<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnglishJounery</title>

    <link rel="icon" href="Img/logo.png">
</head>
<body>
    <div class="loginbox">
        <span class="closebtn"><ion-icon name="close-outline"></ion-icon></span>
        <div class="formlogin">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="Email" class="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                     <input type="password" class="pw" required>
                    <label>Password</label>
                </div>
                <div class="remember">
                   <label> <input type="checkbox">Remember me</label>
                   <a href="#">forgot password</a> 
                </div>
                <button type="submit" class="lgbtn" onclick="signup()">Log In</button>
                <div class="loginreg">
                    <p>Don't have an account?
                    <a href="#" class="reglink">Register</a></p>
                </div>
            </form>
        </div>

        <div class="register">
            <h2>Registration</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" class="text" required>
                    <label>Username</label>
                </div>

                 <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="Email" class="email" required>
                    <label>Email</label>
                </div>


                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                     <input type="password" class="pw" required>
                    <label>Password</label>
                </div>
                <div class="remember">
                   <label> <input type="checkbox">&nbsp;I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="lgbtn">Register</button>
                <div class="loginreg">
                    <p>Already have an account?
                    <a href="#" class="loglink">Login</a></p>
                </div>
            </form>
        </div>
    </div>


     
    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
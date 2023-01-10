<html>

<head>
    <title> Login </title>
    <link rel="stylesheet" href="logincss.css">
    <script src="https://kit.fontawesome.com/9945e8e1e4.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="SignUp()">SignUp</button>
            </div>
            <!-- <div class="social-icons">
                    <i class="fa-brands fa-yahoo"></i>
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-facebook"></i>
                </div> -->
            <form id="login" action="log.php" method="POST" class="input-group">
                <div class="alert alert-warning" role="alert">
                    incorrect credentials!
                </div>
                <input type="text" class="input-field" name="user" placeholder="Username " required>
                <input type="password" class="input-field" name="pass" placeholder="Password " required>
                <input type="checkbox" class="chech-box"><span>Remember Password </span>
                <button type="submit" class="Submit-btn">Login</button>
            </form>
            <form id="SignUp" action="register.php" method="POST" class="input-group">
                <input type="text" class="input-field" name="username" placeholder="Enter Username " required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password " required>
                <br><br>
                <br>
                <button type="submit" class="Submit-btn">Register</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("SignUp");
        var z = document.getElementById("btn");

        function SignUp() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>

</body>

</html>
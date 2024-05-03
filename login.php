<?php
require_once "./connection.php";

if(isset($_SESSION['userdata'])){
    header("Location:dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./sign.css">
</head>
<body>

    <main>
        <div class="box">
            <div class="inbox">
                <div class="wrap">
                    
                    <form action="login_backend.php" method="POST" class="log-in">
                        <div class="heading">
                            <h1>LOG IN</h1>
                            <h5>Not login yet?</h5>
                            <a href="#" class="toggle">Sign up</a>
                        </div>
                        <div class="form">
                            <div class="field">
                            <input type="text" name="user" class="fill" required/>
                                <label>Username</label>
                            </div>
                            <div class="field"> 
                                <input type="password" name="pass" class="fill" required/>
                                <label>Password</label>
                            </div>

                            <input type="submit" name="login" class="log-btn" value="Log In"/>

                            <div class="write">
                                Any problem forgot your password?
                                <a href="#">Forgot password?</a>
                            </div>
                        </div>
                    </form>

                    <form action="log.php" method="POST" class="sign-in">
                        <div class="heading">
                            <h1>SIGN IN</h1>
                            <h5>Already have an account?</h5>
                            <a href="#" class="toggle">Log in</a>
                        </div>
                        <div class="form">
                            <div class="field">
                                <input type="text" name="register" class="fill" required/>
                                <label>Name</label>
                            </div>
                            
                            <div class="field">
                                <input type="Email" name="mail" class="fill" required/>
                                <label>Email</label>
                            </div>

                            <div class="field"> 
                                <input type="password" name="newpass" class="fill" required/>
                                <label>Password</label>
                            </div>

                            <button type="submit" class="log-btn" name="sign" value="Sign In">Sign In</button>

                            <div class="write">
                                By sign in, I agree to the <a href="#">Terms of Services</a> and <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tex">
                    <h1 class="lbn">HELLO!</h1>
                    <h4 class="mbn">Welcome to my login and sign in form.</h4>
                    <!-- <a href="#" class="toggle">Sign up</a> -->
                    <button  href="#" id="but" class="toggle">Sign up</button>
                </div>
            </div>
        </div>
    </main>
    
    <script>
        const input = document.querySelectorAll(".fill");
        const togglebtn = document.querySelectorAll(".toggle");
        const main = document.querySelector("main");

        input.forEach((inp) => {

            inp.addEventListener("focus",() => {
                inp.classList.add("active");
            });

            inp.addEventListener("blur",() => {
                if(inp.value != "") return;
                inp.classList.remove("active");
            });
        });

        togglebtn.forEach((btn) => {
            btn.addEventListener("click", () => {
                main.classList.toggle("log-in-mode");
            });
        });

    </script>
</body>
</html>
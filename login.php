<?php include('server.php') ?>
<html>
    <head>
        <title>sign up and login</title>
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        
        <div class="container">

            <div class="card">
                <div class="inner-box" id="card">
                    <div class="card-front">
                        <h2>LOGIN</h2>
                        <form>
                            <input type="email" class="input-box" placeholder="Enter your email" required>
                            <input type="password" class="input-box" placeholder="password" required>
                            <button type="submit" class="sub-btn" >submit</button>
                            
                            <input type="checkbox"><span>Remember Me</span>
                        </form>
                        <button type="button" class="btn" onclick="openRegister()">New here!!!</button>
                        <a href="">Forgot password</a>


                    </div>
                    <div class="card-back">
                        <h2>REGISTER</h2>
                        <form>
                            <input type="text" class="input-box" placeholder="Enter your Name" required>
                            <input type="email" class="input-box" placeholder="Enter your email" required>
                            <input type="password" class="input-box" placeholder="password" required>
                            <button type="submit" class="sub-btn" >submit</button>
                            <input type="checkbox"><span>Remember Me</span>
                        </form>
                        <button type="button" class="btn" onclick="openLogin()">I have an account</button>
                        <a href="">Forgot password</a>


                    </div>
                </div>
            </div>
        </div> 
        <script>
            var card=document.getElementById("card");
            function openRegister(){
                card.style.transform="rotateY(-180deg)";
            }
            function openLogin(){
                card.style.transform="rotateY(0deg)";
            }
        </script>
    </body>
</html>
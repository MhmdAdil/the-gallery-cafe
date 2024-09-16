<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="login.css">

    <title>login</title>

</head>



<body>




<!-- This is Login Content Area Starting -->
 <div id="login-content-area">

    
    <div class="loging-full-covering">

        <div class="loging-content-sets">
            <div class="log-sec1"></div>
        </div>


        <div class="loging-content-sets">

            <div class="log-sec2">
                <div class="loging-logo"><img src="New folder2/fashionbug.png" alt="" class="login-img"></div>

                <div class="login-page-form-sec">
                    <!-- Login Form -->
                    <form action="register.php" method="POST" id="lg-form1" autocomplete="off">
                        <div><h2>Login</h2></div>
                        <input type="text" id="login-page-username" placeholder="Enter Username" name="username" required>
                        <br>
                        <input type="password" id="login-password" placeholder="Enter Password" name="password" required>
                        <br>
                        <button>Login</button>
                    </form>


                    
                    <!-- Register Form -->
                    <form action="register.php" method="POST" id="lg-form2" autocomplete="off">
                        <div><h2>Register</h2></div>
                        <input type="text" id="register-page-username" placeholder="Create Username" name="user_name" require>
                        <br>
                        <input type="password" id="register-password" placeholder="Create Password" name="user_password" required>
                        <br>
                        <button>Register</button>
                    </form>
                </div>

                
            </div>

        </div>

    </div>

 </div>
    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link rel="stylesheet" href="assets/css/custom.css"/>
</head>
<body>
    <div class="main-head">
        <h2 class="main-title">USER MANAGEMENT SYSTEM</h2>
    </div>
    <div class="main">
        <div class="centered">
            <div class="card-block" id="login">
                <div class="image-holder">
                    <img src="assets/images/user.png" alt="User Img" class="userimg">
                </div>
                <form action="controller/user.php" method="POST">
                    <input type="text" name="user_email" class="input-box" placeholder="Email" autocomplete="off">
                    <input type="password" name="user_password" class="input-box" placeholder="Password">
                    <div class="button-holder">
                    <input type="submit" name="login" value="Login" class="button button-success">
                    <button class="link-button button-primary" id="register_link" >Register</button>
                    </div>
                </form>
                <div class="footer-holder">
                    <a href="" class="link" >Forgot Password ?</a>
                </div>
            </div>
            <!-- Register -->
            <div class="card-block" style="display:none" id="register">
                <div class="image-holder">
                  <h3>User Registration</h3>
                </div>
                <form action="controller/user.php" method="POST"  enctype="multipart/form-data">
                    <input type="hidden" value='1' name="hidden_value">
                    <input type="text" name="user_name" class="input-box" required placeholder="Full Name">
                    <input type="email" name="user_email" class="input-box" required placeholder="Valid Email Address">
                    <input type="text" name="user_username" class="input-box" required placeholder="Username">
                    <input type="password" name="user_password" class="input-box" required placeholder="Password">
                    <input type="password" name="confirm_password" class="input-box" required placeholder="Confirm-Password">
                    <input type="text" name="user_mobile" class="input-box" required placeholder="Mobile Number">
                    <select name="user_gender" id="user_gender" required class="select-box">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <input type="date" name="user_dob" class="input-box" required>
                    <input type="file" name="user_photo" class="file-box">
                    <input type="file" name="user_signature" class="file-box">
                    <button  class="link-button button-success" id="login_link">Login</button>
                    <input type="submit" name="register" value="Register" class="button button-primary">
                </form>
                
            </div>

        </div>      
    </div>
    <div class="footer">
        <p>Copyright &copy; 2022</p>
    </div>
    <script type="application/javascript">
        document.getElementById('register_link').onclick = function(e) {
            e.preventDefault();
            document.getElementById('login').style.display = "none";
            document.getElementById('register').style.display = "block";
        }

        document.getElementById('login_link').onclick = function(e) {
            e.preventDefault();
            document.getElementById('register').style.display = "none";
            document.getElementById('login').style.display = "block";
        }

    </script>
</body>
</html>
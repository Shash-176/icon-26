<?php
session_start();
// ! points to -> player_detail
include 'config.php';

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "player_details";

// $servername = "localhost";
// $username = "u419687700_icon2023"; 
// $password = "7?jlwm1V&5x";
// $database = "u419687700_icon23_details";
// $conn = mysqli_connect($servername, $username, $password, $database);
// !

if (isset($_SESSION['designation'])) {
    if ($_SESSION['designation'] == "admin") {
        header("Location: admin_page.php");
        exit();
    } else {
        header("Location: ec_page.php");
        exit();
    }
}

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = $_POST['password'];
    
    $selectadmin = "SELECT * FROM admins WHERE email = ? AND pass = ?";
    $stmt = $conn->prepare($selectadmin);
    $stmt->bind_param("ss", $email, $pass);
    $stmt->execute();
    $resultadmin = $stmt->get_result();
    
    if ($resultadmin->num_rows > 0) {
        $row = $resultadmin->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['designation'] = $row['eventname'];
    
        if ($_SESSION['designation'] == "admin") {
            $admin_page_redirect = "admin_page.php";
            header("Location: $admin_page_redirect");
            exit();
        } else {
            $user_page_redirect = "ec_page.php";
            header("Location: $user_page_redirect");
            exit();
        }
    } else {
        echo "<script>
        alert('login failed');
        const error =document.querySelector('.login-error');
        error.innerHTML = 'redential does not match';</script>";    }
    
    }
    else{
        header("lo");
    }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>EC Admin Login</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./index.css">

    <style>
    :root {
        --primary--red: #b7202e;
        --primary--light--red: #ed1c24;
        --primary-gray: #58595b;
        --primary--black: #231f20;
        --secondary--orange: #f58220;
        --secondary--light--brown: #a25723;
        --secondary--dark--brown: #603312;
        --secondary--yellow: #ffcb05;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container .row {
        justify-content: center;
    }

    form#loginform {
        border: 1px solid #ccc;
        padding: 12px 15px;
        background-color: white;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);

    }

    form#loginform h3 {
        text-align: center;
    }
    
    form#loginform input[type='submit'] {
        color: var(--primary--red);
        background-color: white;
        border: 1px solid var(--primary--red);
        margin: 10px 0px 0px 15px;
    }

    /* form#loginform input[type='submit']:hover {
         color: var(--primary--red);
         background-color: white;
      } */

    i {
        position: absolute;
        right: 25px;
        top: 5px;
    }
    </style>
</head>

<body>
    <div style="background-color: #b7202e; height: 5vh; width:100%; position: absolute; left:0;top:0;"></div>
    <div style="background-color: #ed1c24; height: 5vh; width:10vw; position: absolute; left:0;top:0;"></div>
    <div style="background-color: #b7202e; height: 30vh; width: 7vw; float:right; position: absolute; right:0;top:0;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">
                <form class="form-horizontal form" id="loginform" action="#" method="POST">

                    <?php
               // if (isset($error)) {
               //    foreach ($error as $error) {
               //       //echo '<span class="error-msg">'.$error.'</span>';
               //       echo '<script>console.log(.$error.)</script>';
               //    }
               //    ;
               // }
               // ;
               ?>
                    <h3>ADMIN LOGIN</h3>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Email</label>
                        <div class="col-12">
                            <input id="admin--email" name="email" type="email" placeholder="Enter Email"
                                class="form-control" required>
                        </div>

                        <label class="col-md-3 control-label" for="textinput">Password</label>
                        <div class="col-12">
                            <input id="admin--password" name="password" type="password" placeholder="Enter Password"
                                class="form-control">
                            <i class="bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                        <span class="login-error"></span>
                        <input type="submit" class="btn btn-admin-login" name="submit" value="Login" class="form-btn"
                            id="abc">
                    </div>

                </form>
            </div>

        </div>
    </div>

    <div style="background-color: #b7202e; height: 5vh; width:100%; position: absolute; right:0;bottom:0;"></div>
    <div style="background-color: #ed1c24; height: 5vh; width:10vw; position: absolute; right:0;bottom:0;"></div>
    <div style="background-color: #b7202e; height: 30vh; width: 7vw; float:right; position: absolute; left:0;bottom:0;">
    </div>

    <script type="application/javascript">
    //error handling
    // function handleAdminLogin(type){
    //    debugger
    //    const error =document.querySelector('.login-error');
    //    error.innerHTML = "Credential does not match";
    // }

    //selector
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#admin--password');

    //on click event
    togglePassword.addEventListener('click', () => {
        //toggle attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Toggle the eye icon
        if (type === 'password') {
            togglePassword.setAttribute("class", "bi bi-eye-slash");
        } else {
            togglePassword.setAttribute("class", "bi bi-eye");
        }
    });
    </script>

</body>

</html>
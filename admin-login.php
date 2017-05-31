<!DOCTYPE html>
<html lang="nl">
<head>
    <meta name="text/html">
    <meta name="CONTENT">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        html{
            background-image: url("afrika back.jpg");


        }
        nav{
            width: 1650px;
            height: 110px;
            background-color: black;
            margin-left: -50px;
            margin-top: -16px;

        }
        nav ul{


        }
        nav ul li{
            list-style-type: none;
            margin-left: 650px;



        }
        nav ul li a{
            text-decoration: none;
            margin-left: 50px;
            float: left;
            font-family: "Century Gothic";
            margin-top: 50px;
            color: white;


        }
        #logo img{
            position: absolute;
            width: 250px;
            left: 670px;
            top: 1px;

        }
         form {
             border: 3px solid #f1f1f1;
         }

        input[type=text], input[type=password] {
            width: 30%;
            padding: 12px 20px;
            margin: 10px 395px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=checkbox]{
            position: absolute;
            left: 860px;
        }
        h5{
            position: absolute;
            left: 875px;
            top: 500px;
        }
        text{
            position: absolute;
            left: 860px;

        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 10px 396px;
            border: none;
            cursor: pointer;
            width: 30%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 10%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }

    </style>
</head>
<body>
<div class="container-fullwidth">
    <div class="jumbotron" style="background: url(banner.jpg);background-size: 100%; background-repeat: no-repeat; height: 215px" >
    </div>
</div>
<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $admin_username = mysqli_real_escape_string($db,$_POST['username']);
    $admin_password = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id FROM users WHERE admin_username = '$admin_username' and admin_password = '$admin_password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        session_start("admin_username");
        $_SESSION['login_user'] = $admin_username;

        header("location: 74AB913CBACD5BE8D6440C32B3EA84F2F84F20D.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<html>

<head>
    <title>Admin login</title>

    <style type = "text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
        }

        label {
            font-weight:bold;
            width:100px;
            font-size:14px;
        }

    </style>

</head>

<body bgcolor = "#FFFFFF">






            <form action="admin-login.php" method="post">
                <div class="imgcontainer">
                    <img src="avatar.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">

                    <input id="username" type="text" placeholder="Enter Username" name="username" required>
                    <br>

                    <input type="password" placeholder="Enter Password" name="password" required>
                    <input type="hidden" name="hidden">
                    <button type="submit">Login</button>
                    <br>

                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Cancel</button>
                </div>
            </form>



        </div>

    </div>

</div>






</body>
</html>


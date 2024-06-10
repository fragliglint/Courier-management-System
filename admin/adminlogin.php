<?php

session_start();
if (isset($_SESSION['uid'])) {

    header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
          body {
            background-image: url('../images/huhu.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-color: black;
            background-position: 20% 60%;
     
        }
  
        body {
			margin: 120px 300px;
		}

		 .button{
           
            padding: 9px 10px;
            background-color: #F88614;
            color:white;
            border: 2px solid white;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            margin:  0px 90px;
        } 

         .btn {
            padding: 9px 10px;
            background-color: #F88614;
            color:white;
            border: 2px solid white;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            margin: 12px;
        }
         .btn:hover {
          background-color: white;
          color: #F88614; 
        }
        .btn:hover {
          background-color: white;
          color: #F88614; 
        }
        .active {
		  background-color: #717171;
		}
    
    </style>
</head>

<body>
<h5><a href="../index.php" style="float: right; margin-right:50px; color:#F88614">Back</a></h5><br>
<h2  align='center' style="color: #F88614;">ADMIN LOGIN</h2>
            <p style="color:#e84118;">Please Fill Your ⮯⮯</p>
    <form action="adminlogin.php" method="POST" style="margin: auto;">
        <table align="center">
            <tr>
                <td>Email_ID:</td>
                <td><input type="email" name="uname" require></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" require></td>
            </tr>
            <tr>
                <td colspan="2">
                </td>
            </tr>
            <tr> 
                <td colspan="2" align="center"><input type="submit"  class="btn btn-danger" name="login" value="Login" style="cursor: pointer;"></td>
            </tr>
        </table>
    </form>
    <div>
    <p style="color: #e84118;">Don't remember Password?⮞➤</p>
                <button onclick="window.location.href='resetpswd.php'" class="button" style="cursor:pointer">Reset Password</button>
                    </div>
</body>

</html>

<?php

include('../dbconnection.php');
if (isset($_POST['login'])) {
    $ademail = $_POST['uname'];
    $password = $_POST['pass'];
    $qry = "SELECT * FROM `adlogin` WHERE `email`='$ademail' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        ?>
        <script>
            alert("Only admin can login..");
            window.open('adminlogin.php', '_self');
        </script><?php
    }
    else {
        $data = mysqli_fetch_assoc($run);
        $id = $data['a_id'];
        $_SESSION['uid'] = $id;
        header('location:dashboard.php');
    }
}
?>


<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header('location: ../index.php');
    exit();
}

include('header.php');
include('../dbconnection.php');

$email = $_SESSION['emm'];
$uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <style>
        body {
            background-image: url('../images/track.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        td {
            color: white;
            padding: 10px 28px;
        }

        th {
            color: #E2D8CE;
        }
    </style>
</head>

<body>
    <form action="courierMenu.php" method="POST" enctype="multipart/form-data">
        <div style="overflow-x:auto;">
            <table border="0px solid" style="margin: auto; font-weight: bold; border-spacing: 10px 15px;">
                <thead>
                    <tr>
                        <th colspan="4" style="text-align: center; background-color: #D3C8BD; color: #2C2A28; width: 180px; height: 50px;">
                            Fill The Details Of Sender & Receiver
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: center;">
                            <hr>
                        </td>
                    </tr>
                    <tr style="text-align: center;">
                        <th colspan="2">SENDER</th>
                        <th colspan="2">RECEIVER</th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <hr>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="sname" placeholder="Sender FullName" required></td>
                        <td>Name:</td>
                        <td><input type="text" name="rname" placeholder="Receiver FullName" required></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="semail" value="<?php echo htmlspecialchars($email); ?>" readonly></td>
                        <td>Email:</td>
                        <td><input type="email" name="remail" placeholder="Receiver EmailId" required></td>
                    </tr>
                    <tr>
                        <td>Phone No.:</td>
                        <td><input type="number" name="sphone" placeholder="Sender Number" required></td>
                        <td>Phone No.:</td>
                        <td><input type="number" name="rphone" placeholder="Receiver Number" required></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="saddress" placeholder="Sender Address" required></td>
                        <td>Address:</td>
                        <td><input type="text" name="raddress" placeholder="Receiver Address" required></td>
                    </tr>
                    <tr>
                        <td colspan="4">✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️</td>
                    </tr>
                    <tr>
                        <td>Weight:</td>
                        <td><input type="number" name="wgt" placeholder="Weight in kg" required></td>
                        <td>Payment Id:</td>
                        <td><input type="text" name="billno" placeholder="Enter Transaction Num" required></td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly></td>
                        <td>Items Image:</td>
                        <td><input type="file" name="simg"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center"><input type="submit" name="submit" value="Place Order" style="background-color: orange; margin-top: 10px; border-radius: 15px; width: 140px; height: 40px; cursor: pointer;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    $sname = mysqli_real_escape_string($dbcon, $_POST['sname']);
    $rname = mysqli_real_escape_string($dbcon, $_POST['rname']);
    $semail = mysqli_real_escape_string($dbcon, $_POST['semail']);
    $remail = mysqli_real_escape_string($dbcon, $_POST['remail']);
    $sphone = mysqli_real_escape_string($dbcon, $_POST['sphone']);
    $rphone = mysqli_real_escape_string($dbcon, $_POST['rphone']);
    $sadd = mysqli_real_escape_string($dbcon, $_POST['saddress']);
    $radd = mysqli_real_escape_string($dbcon, $_POST['raddress']);
    $wgt = mysqli_real_escape_string($dbcon, $_POST['wgt']);
    $billn = mysqli_real_escape_string($dbcon, $_POST['billno']);
    $newDate = date("Y-m-d", strtotime($_POST['date']));

    $imagenam = $_FILES['simg']['name'];
    $tempnam = $_FILES['simg']['tmp_name'];
    
    if ($imagenam) {
        move_uploaded_file($tempnam, "../dbimages/$imagenam");
    } else {
        $imagenam = NULL; // Handle case where no file is uploaded
    }

    $qry = "INSERT INTO `courier` (`sname`, `rname`, `semail`, `remail`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`, `date`, `u_id`) 
            VALUES ('$sname', '$rname', '$semail', '$remail', '$sphone', '$rphone', '$sadd', '$radd', '$wgt', '$billn', '$imagenam', '$newDate', '$uid');";
    
    $run = mysqli_query($dbcon, $qry);

    if ($run) {
        echo "<script>
                alert('Order Placed Successfully :)');
                window.open('courierMenu.php', '_self');
              </script>";
    } else {
        echo "<script>
                alert('Failed to place order. Please try again.');
              </script>";
    }
}
?>

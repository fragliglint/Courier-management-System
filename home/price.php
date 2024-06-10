<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <style>
         h2
		{
			
			padding: 5px;
			font-size: 35px;
			text-align: center;
		}
        h3 {
            text-align: center;
            margin-top: 20px;
        }

        li
		{
			display: inline;
			float: right;
		}
		.c_charge
		{
			color: black;
			border: 10px;
			padding: 30px;
			font-size: 29px;
			text-align: center;
			width: 500px;
			margin: auto;
		}
        .exp{
            margin-left:45% ;
            margin-right:auto ;
            font-weight:bold;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<h2 class="c_charge">COURIER CHARGES DETAILS</h2><br>
    <table width='50%' border="1.5px solid" style="margin-top:10px;margin-left:auto ;margin-right:auto ;font-weight:bold;border-spacing: 5px 5px;border-collapse: collapse;">
    <tr style="background-color: #D3C8BD;font-size:20px;text-align: center">
    <th style="text-align: center">Weight standard charges</th><th>Price</th>
    </tr>
    <tr>
    <td>0-1 KG</td><td>120</td>
    </tr>
    <tr>
    <td>1-2 KG</td><td>200</td>
    </tr>
    <tr>
    <td>2-4 KG</td><td>250</td>
    </tr>
    <tr>
    <td>4-5 KG</td><td>300</td>
    </tr>
    <tr>
    <td>5-7 KG</td><td>400</td>
    </tr>
    <tr>
    <td>7-above KG</td><td>500</td>
    </tr>
    </table>
    <h3> As per your courier's weight pay the amount on:</h3>
    <div class="exp">
    <p>
    1. E-mail:  fastexpress.no1courier@gmail.com <br>
    2. Bkash:  01724580822 <br>
    3. Bank:  3565656555 <br>
    </p>
    </div>
</body>
</html>
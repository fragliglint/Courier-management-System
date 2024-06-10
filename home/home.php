<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
      	body {
			margin: 0px;
		}

		 .button{
            padding: 0px 40px;
        } 

         .btn {
            padding: 9px 10px;
            background-color: #F88614;
            color:white;
            border: 2px solid white;
            border-radius: 5px;
            font-size: 20px;
            cursor: pointer;
            margin: 12px;
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
    <?php include('header.php'); ?>
    <img src="../images/tr.jpg"  style="width:100%">
    <div class="mySlides">
					<img src="../images/process.png" alt="Snow" style="width:100%">
		</div>

</body>
</html>
<?php include('footer.php'); ?>
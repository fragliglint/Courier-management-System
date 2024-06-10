
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Navbar with Logo Image</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    ul
		{
  			list-style-type: none;
			background-color: #0F0310;
			margin-bottom: 0px;
			color: white;
			margin-top: 0px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		li
		{
			display: inline;
			float: right;
		}
    a:link, a:visited 
		{
			color: white;
			padding: 17px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: white;
			color:  rgb(118 129 85 / 90%);
		}

</style>
</head>
<body>
<ul>
<img src="../images/logohome.png" height="60" alt="">
<li><a href="../logout.php" >LogOut</a></li>
        <li><a href="contactUs.php" >ContactUs</a></li>
		<li><a href="courierMenu.php">MENU</a></li>
        <li><a href="price.php">PRICE</a></li>
        <li><a href="trackMenu.php">TRACK</a></li>
        <li><a href="profile.php">PROFILE</a></li>
		</ul>
</body>
</html>


  
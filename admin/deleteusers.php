<?php
    session_start();
    if(isset($_SESSION['uid'])){
        echo "";
    }else{
        header('location: ../login.php');
    }
?>

<?php
include('head.php');
?>
<style>
		*{
    margin: 0px;
    padding: 30;
    background-repeat: no-repeat;
}
	
    body {
	  margin: 0;
	  background: white;;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: #78D5E3;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: center;
		width: 800px;
		padding: 50px;
		box-shadow: 0 10px 20px  rgb(120 213 227 / 90%);
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 20%;
	  	font-size: 24px;
	  	background-color:  #78D5E3;
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: #78D5E3;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #e7da6f9e;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE Fast COURIER SERVICE</td>
		</tr>
	</table>
	<ul>
		<li><a href="dashboard.php" class="active">User Info</a></li>
		<li><a href="tck.php">Price Control</a></li>
		<li><a href="deletedata.php">Delete Data</a></li>
		<li><a href="deleteusers.php">Delete Users</a></li>
	<!--	<li><a href="Emails.php">Check E-mails</a></li> -->
		<li><a href="deliver.php">Delivery Details</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>

<div class="admintitle">
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Showing All Users</h1>
</div>

<div style="margin-left: 380px; margin-top: 30px;">
	<form method="post" action="">
		<input type="text" name="search" placeholder="Search by User Name" style="font-size: 22px; padding: 10px;">
		<input type="submit" name="submit" value="Search" style="font-size: 22px; padding: 10px;">
	</form>
</div>

<div style="overflow-x:auto;">
<table width='70%' border="1px solid" style="margin-left: 380px; margin-right: auto; margin-top: 30px; font-weight: bold; border-collapse: collapse;">
    <tr style="background-color: pink;">
        <th>No.</th>
        <th>Users Name</th>
        <th>Email Id</th>
        <th>Action</th>
    </tr>
    <?php
        include('../dbconnection.php');

        if(isset($_POST['submit'])){
            $search = mysqli_real_escape_string($dbcon, $_POST['search']);
            $qry = "SELECT * FROM `users` WHERE `name` LIKE '%$search%'";
        } else {
            $qry = "SELECT * FROM `users`";
        }

        $run = mysqli_query($dbcon, $qry);

        if(mysqli_num_rows($run) < 1){
            echo "<tr><td colspan='6'>There is no Data in Database</td></tr>";
        } else {
            $count = 0;
            while($data = mysqli_fetch_assoc($run)){
                $count++;
                ?>
                <tr align="center">
                    <td><?php echo $count; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><a href="usersdeleted.php?emm=<?php echo $data['email']; ?>">Delete User</a></td>
                </tr>
                <?php
            }
        }
    ?>
</table>
</div>
</body>
</html>

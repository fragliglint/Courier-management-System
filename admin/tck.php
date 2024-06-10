<!DOCTYPE html>
<html>
<head>
	<title>Admin Control</title>
</head>
<style>
	body {
	  margin: 0;
	  background: white;
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color:  #78D5E3;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: center;
		width: 700px;
		padding: 50px;
		box-shadow: 0 10px 20px  rgb(120 213 227 / 90%);
	}
	
	table {
		font-size: 22px;
        text-align: center;
	}
	td {
		text-align: center;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: #78D5E3;
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
	  	background-color:  #78D5E3;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #78D5E3;;
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
	<!--	<li><a href="Emails.php">Check E-mails</a></li>  -->
		<li><a href="deliver.php">Delivery Details</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
    	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
		include('../dbconnection.php');
			$sql = "SELECT * from pc";
            $run= mysqli_query($dbcon,$sql); 
            ?>	
			<div class="basic_box">
		  	<table style=" margin: 10px 200px;">
				<tr>
					<th >Parcel Type</th>
					<th >Weight (KG) </th>
					<th >Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($run))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; 
			} ?>
			</td>
				</tr>
			</table>
			<br><br><br>
    </table>
    </div>
    <h4> As per your courier's weight pay the amount on:</h4>
    <div class="exp">
    <form action="tck.php" method="post">
			<table>
				<tr>
					<td ><b>Select percel type:</td>
					<td >
						<select name="rooms" required>
							<option value="">Select</option>
							<option value="Normal">Normal</option>
							<option value="VIP">VIP </option>
							<option value="Urgent">Urgent</option>
						</select>
					</td>
				</tr>
				<tr>
					<td >Enter weight of parcel:</td>
					<td ><input type="number" min="0" name="noofrooms" id="rooms" required></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
            <span style="margin-left: 40%"><input align="center" type="submit" value=" Pay "></span>
			</form>
</body>
</html>
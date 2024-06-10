<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header('location:adminlogin.php');
    exit();
}

include('head.php');
include('../dbconnection.php');

function display_view($query, $title) {
    global $dbcon;
    echo "<h2 align='center' style='text-shadow: 0.1em 0.1em 0.15em #f9829b;'>$title</h2>";
    echo "<div style='overflow-x:auto;'>";
    echo "<table width='70%' border='1px solid' style='margin-left:380px; margin-right:auto; margin-top:30px; font-weight:bold; border-spacing: 5px 5px;'>";
    $result = mysqli_query($dbcon, $query);
    if (mysqli_num_rows($result) > 0) {
        $columns = mysqli_fetch_fields($result);
        echo "<tr style='background-color: pink;'>";
        foreach ($columns as $column) {
            echo "<th>{$column->name}</th>";
        }
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $data) {
                echo "<td>{$data}</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='100%'>No records found</td></tr>";
    }
    echo "</table></div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        * { margin: 0px; padding: 0px; background-repeat: no-repeat; }
        body { margin: 0; background: white; }
        table { font-size: 22px; }
        td { text-align: center; }
        #td1 { background-color: #78D5E3; color: white; border: 10px; margin-top: -10px; padding: 10px; }
        .basic_box { border: 1px solid #ccc; border-radius: 15px; margin: center; width: 700px; padding: 50px; box-shadow: 0 10px 20px rgb(120 213 227 / 90%); }
        th { font-weight: bold; padding-left: 15px; }
        ul { list-style-type: none; margin: 0; padding: 0; width: 20%; font-size: 24px; background-color: #78D5E3; text-decoration: none; position: fixed; height: 100%; overflow: auto; }
        li { color: white; }
        li a { display: block; color: white; padding: 8px 16px; text-decoration: none; }
        li a.active { background-color: #78D5E3; color: white; }
        li a:hover:not(.active) { background-color: #e7da6f9e; color: white; text-decoration: underline; }
    </style>
</head>
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
    <!--<li><a href="Emails.php">Check E-mails</a></li>-->
    <li><a href="deliver.php">Delivery Details</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

<h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Dashboard</h1>

<?php
display_view("SELECT * FROM courierinfo", "Courier Information");
display_view("SELECT * FROM AdminsWithGmail", "Admins with Gmail");
display_view("SELECT * FROM MerchantsWithSpecificPhone", "Merchants with Specific Phone");
display_view("SELECT * FROM UsersWithBookings", "Users with Bookings");
display_view("SELECT * FROM ContactsWithDelay", "Contacts with Delay");
display_view("SELECT * FROM WaitingCouriers", "Waiting Couriers");
display_view("SELECT * FROM AdminsWithMultipleLogins", "Admins with Multiple Logins");
display_view("SELECT * FROM MerchantsWithMultipleLogins", "Merchants with Multiple Logins");
display_view("SELECT * FROM UsersWithRecentBookings", "Users with Recent Bookings");
?>

</body>
</html>

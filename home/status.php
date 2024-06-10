<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
<?php include('header.php');
    include('../dbconnection.php');
    $idd = $_GET['sidd'];

    $qryy= "SELECT * FROM `courier` WHERE `c_id`='$idd'";
    $run= mysqli_query($dbcon,$qryy);
    $data=mysqli_fetch_assoc($run);
    $stdate = $data['date'];
    $tddate= date('Y-m-d');

    if($stdate==$tddate){
        ?>
        <h1 style="margin: 100px;background-color:#CFB396;text-align:center">Status >> On The Way...</h1>
       
        <img src="../images/sts.png" height="280" alt="Snow" style="margin: 0px 500px">
        <br/> <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:#CFB396;height:60px;width:130px;border-radius:15px;cursor:pointer">GoBack</button>
        </div>
         <?php 
    }
    else{
        ?>
        <h1 style="margin: 100px;background-color:#CFB396;text-align:center">Status >> Items Delivered..<br /><p>HAVE A NICE DAY <br>THANK YOU FOR USING OUR SERVICE</p></h1>
        <img src="../images/sts.png" height="280" alt="Snow" style="margin: 0px 500px">
        <br/> <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:#e56306;;height:60px;width:130px;border-radius:15px;cursor:pointer">GoBack</button>
        </div>
        <?php
    }
?>



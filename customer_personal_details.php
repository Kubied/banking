<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personal Details</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
            <br><br><br><br>
            <h3 style="text-align:center;color:#2E4372;"><u>Personal Details</u></h3>
            
            <?php
                $cust_id=$_SESSION['cust_id'];
                include '_inc/dbconn.php';
                include 'classes.php';
                $sql="SELECT * FROM customer WHERE email='$cust_id'";
                $result=  $mysql->query($sql) or die($mysql->error());
                $rws=  $result->fetch_array();
                
                $detail = new Customer();              
                $detail->setName($rws[1]);              
                $detail->setAccno($rws[0]);
                $detail->setDob($rws[3]);
                $detail->setNominee($rws[4]);
                $detail->setBranch($rws[10]);
                $detail->setBranchcode($rws[11]);     
                $detail->setGender($rws[2]);
                $detail->setMobile($rws[7]);
                $detail->setEmail($rws[8]);
                $detail->setAddress($rws[6]);   
                $detail->setLastlogin($rws[12]);
                $detail->setAccstatus($rws[13]);
                $detail->setAcctype($rws[5]);                                                                           
               ?>          
                <div class="customer_body">
            <div class="content3">
            <?php echo $detail->showDetails();?>
            </div>
            </div>
        </div>
               <?php include 'footer.php';?>
            
    </body>
</html>

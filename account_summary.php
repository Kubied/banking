<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
            
            <?php
        include 'classes.php';
        
             $acc_sum = new Account_Summary();
        
                $cust_id=$_SESSION['cust_id'];
                include '_inc/dbconn.php';
                $sql="SELECT * FROM customer WHERE email='$cust_id'";
                $result=  $mysql->query($sql) or die($mysql->error());
                $rws=  $result->fetch_array();
                
                
                $acc_sum->setName($rws[1]);
                $acc_sum->setAccno($rws[0]);
                $acc_sum->setBranch($rws[10]);
                $acc_sum->setBranchcode($rws[11]);
                $acc_sum->setLastlogin($rws[12]);
                $acc_sum->setAccstatus($rws[13]);
                $acc_sum->setAddress($rws[6]);
                $acc_sum->setAcctype($rws[5]);
                
                $acc_sum->setGender($rws[2]);
                $acc_sum->setMobile($rws[7]);
                $acc_sum->setEmail($rws[8]);
                
                $_SESSION['login_id']=$acc_sum->getAccno();
                $_SESSION['name']=$acc_sum->getName();
                
                $sql="SELECT * FROM passbook".$_SESSION['login_id'] ;
                $result=  $mysql_query($sql) or die($mysql->error());
                $rws= $result->fetch_array();
                
                $acc_sum->setBalance($rws[6]);
                                
?>
            <p>Name: <?php echo $acc_sum->getName();?></p>
            <p>gender: <?php if($acc_sum->getGender()=='M') echo "Male"; else echo "Female";?></p>
            <p>Mobile: <?php echo $acc_sum->getMobile;?></p>
            <p>Email: <?php echo $acc_sum->getEmail;?></p>
            <br>
            <p>Account No: <?php echo $acc_sum->getAccno();?></p>
            <p>Branch: <?php echo $acc_sum->getBranch();?></p>
            <p>Branch Code: <?php echo $acc_sum->getBranchcode();?></p>
            <p>Last Login: <?php echo $acc_sum->getLastlogin();?></p>
            <br>
            <p>Account status: <?php echo $acc_sum->getAccstatus();?></p>
            <p>Account Type: <?php echo $acc_sum->getAcctype();?></p>
            <p>Address: <?php echo $acc_sum->getAddress();?></p>
            
        </div>
               <?php include 'footer.php';?>
            
    </body>
</html>

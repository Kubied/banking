<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
                $cust_id=$_SESSION['cust_id'];
                include '_inc/dbconn.php';
                include 'classes.php';
                $accsum = new Account_Summary();
                
                $sql="SELECT * FROM customer WHERE email='$cust_id'";
                $result=  $mysql->query($sql) or die($mysql->error());
                $rws=  $result->fetch_array();
                
                
                $accsum->setName($rws[1]);
                $accsum->setAccno($rws[0]);
                $accsum->setBranch($rws[10]);
                $accsum->setBranchcode($rws[11]);
                $accsum->setLastlogin($rws[12]);
                $accsum->setAccstatus($rws[13]);
                $accsum->setAddress($rws[6]);
                $accsum->setAcctype($rws[5]);
                
                $accsum->setGender($rws[2]);
                $accsum->setMobile($rws[7]);
                $accsum->setEmail($rws[8]);
                
                $_SESSION['login_id']=$accsum->getAccno();
                $_SESSION['name']=$accsum->getName();
                ?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Home - Online Banking</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
            
            
            <?php
                
                $sql="SELECT * FROM passbook".$_SESSION['login_id'] ;
                $result=  $mysql->query($sql) or die($mysql->error());
                while($rws=  $result->fetch_array())
                {
                $accsum->setBalance($rws[7]);
                }                           
                ?>
          <div class="customer_body">
                <div class="content1">
                        <?php $accsum->showCustomerSummary();?>
                        </div>       
           </div>
    
               <?php include 'footer.php';?>
            
    </body>
</html>

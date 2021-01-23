<?php 
session_start();
        
if(!isset($_SESSION['staff_login'])) 
    header('location:staff_login.php');   
?>
 <?php
                $staff_id=$_SESSION['staff_id'];
                include '_inc/dbconn.php';
                include 'classes.php';
                $sql="SELECT * FROM staff WHERE email='$staff_id'";
                $result=  $mysql->query($sql) or die($mysql->error());
                $rws=  $result->fetch_array();

                $staff = new Staff();   
                $staff->setId($rws[0]);
                $staff->setName($rws[1]);
                $staff->setDob($rws[2]);
                $staff->setDept($rws[4]);
                $staff->setDoj($rws[5]);
                $staff->setMobile($rws[7]);
                $staff->setEmail($rws[8]);
                $staff->setGender($rws[10]);
                $staff->setLastlogin($rws[11]);
                
                $_SESSION['login_id']=$staff->getEmail();
                $_SESSION['name1']=$staff->getName();
                $_SESSION['id']=$staff->getId();
                ?>
            
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staff Home</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class="displaystaff_content">
            
           <?php include 'staff_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name1']?></div>
            </div>
           
            <div class="customer_body">
             <div class="content1">
                <?php
        $staff->showStaff();
        ?>
                     
                   
            </div>
            </div>
        </div>
    <?php include 'footer.php';?>
<?php
$staff->setDate(date('Y-m-d H:i:s'));
$_SESSION['staff_date']=$staff->getDate();
?>
            
                

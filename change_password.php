<?php 
session_start();
include '_inc/dbconn.php';
       include 'classes.php';
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content'>
           <?php include 'admin_navbar.php'?>
            <div class='admin_change_pwd'>
            <form action="" method="POST">
                <table align="center">
                    <tr>
                        <td>Enter old password</td>
                        <td><input type="password" name="old_password" required=""/></td>
                    </tr>
                    <tr>
                        <td>Enter new password</td>
                        <td><input type="password" name="new_password" required=""/></td>
                    </tr>
                    <tr>
                        <td>Enter password again</td>
                        <td><input type="password" name="again_password" required=""/></td>
                    </tr>
                    <tr>
                        
                        <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="change_password" value="Change Password" class="addstaff_button"/></td>
                    </tr>
                </table>
            </form>
                </div>
            </div>
            <?php
        $pass = new Change_Password();
        
            if(isset($_REQUEST['change_password'])){
            $sql="SELECT * FROM admin WHERE id='1'";
            $result=$mysql->query($sql);
            $rws=  $result->fetch_array();
                    
            $pass->setOld($mysql->real_escape_string($_REQUEST['old_password']));
            $pass->setNew($mysql->real_escape_string($_REQUEST['new_password']));
            $pass->setAgain($mysql->real_escape_string($_REQUEST['again_password']));
                    
            if($rws[9] == $pass->getOld() && $pass->getNew() == $pass->getAgain()){
                $sql1="UPDATE admin SET pwd='".$pass->getNew()."' WHERE id='1'";
                $mysql->query($sql1) or die($mysql->error());
                header('location:admin_hompage.php');
            }
            else{
                
                header('location:change_password.php');
            }
            }
            ?>
            
        </div>
        <?php include 'footer.php';?>

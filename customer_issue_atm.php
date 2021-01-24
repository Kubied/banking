<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ATM request</title>
        
        <link rel="stylesheet" href="newcss.css">
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
    </head>
        <?php include 'header.php' ?>
<div class='content_customer'>

           <?php include 'customer_navbar.php'?>
     <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
            <br><br>
    
    <form action="customer_issue_atm_process.php" method="POST">
    <table align="center">
        <tr><td>Issue: <select name="atm">
        <option value='ATM' selected>ATM</option>
        <option value='CHEQUE'>Cheque Book</option></td><tr>
        
    </select>
          </table>      
    <table align="center"><tr><td><input type="submit" name="submitBtn" value="Request" class='addstaff_button'></td></tr>
    </table>    </form>
    
    <?php 
        include '_inc/dbconn.php';
        include 'classes.php';
        
        $issue = new Customer_Issue();
        
        $issue->setSenderid($_SESSION["login_id"]);
        
        $sql="SELECT * FROM cheque_book WHERE account_no='".$issue->getSenderid()."'";
        $result=$mysql->query($sql) or die($mysql->error());
        $rws=$result->fetch_array();
        $issue->setChequestatus($rws[3]);
        $issue->setChequeid($rws[2]);
        
        $sql="SELECT * FROM atm WHERE account_no='".$issue->getSenderid()."'";
        $result=$mysql->query($sql) or die($mysql->error());
        $rws=$result->fetch_array();
        $issue->setAtmstatus($rws[3]);  
        $issue->setAtmid($rws[2]);
        
        if(($issue->getAtmid() == $issue->getSenderid()) || ($issue->getChequeid() == $issue->getSenderid()))
        {
            echo $issue->showIssues();
         }
        ?>
    <?php include 'footer.php';?>

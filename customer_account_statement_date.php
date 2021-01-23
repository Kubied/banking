<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account Statement</title>
        
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
    <p><b>Welcome <?php echo $_SESSION['name']?></b></p>
    


    
    <h3 style="text-align:center;color:#2E4372;"><u>Account summary by Date</u></h3>
  
    
            
    <table align="center">
                        
                        <th>Id</th>
                        <th>Transaction Date</th>
                        <th>Narration</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Balance Amount</th>
                        
                        <?php
         include 'classes.php';
                
        $acc_state = new Account_Statement();
        if(isset($_REQUEST['summary_date'])) {
                         $acc_state->setDate1($_REQUEST['date1']);
                         $acc_state->setDate2($_REQUEST['date2']);
                   
                         include '_inc/dbconn.php';
                
                         $acc_state->setSenderid($_SESSION["login_id"]);
                         $sql="SELECT * FROM passbook".$acc_state->getSenderid()." WHERE transactiondate BETWEEN '".$acc_state->getDate1()."' AND '".$acc_state->getDate2()."'";
                         $result=  $mysql->query($sql) or die($mysql->error());
                        while($rws=  $result->fetch_array()){
                            
                            echo "<tr>";
                            echo "<td>".$rws[0]."</td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "<td>".$rws[8]."</td>";
                            echo "<td>".$rws[5]."</td>";
                            echo "<td>".$rws[6]."</td>";
                            echo "<td>".$rws[7]."</td>";
                           
                            echo "</tr>";
                        }
                        } ?>
</table>
    </div>
        <?php include 'footer.php'?>

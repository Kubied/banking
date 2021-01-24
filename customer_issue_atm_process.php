<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
include '_inc/dbconn.php';
include 'classes.php';

$issue = new Customer_Issue();

$issue->setName($_SESSION['name']);
$issue->setSenderid($_SESSION['login_id']);
$issue->setOption($_REQUEST['atm']);

$issue->setAtmstatus("NOT REQUESTED");
$issue->setChequestatus("NOT REQUESTED");

if($issue->getOption() == 'ATM')
    $issue->setAtmstatus("PENDING");
else
    $issue->setChequestatus("PENDING");
    

    $sql="SELECT * FROM cheque_book WHERE account_no='".$issue->getSenderid()."'";
    $result=$mysql->query($sql) or die($mysql->error());
    $rws=$result->fetch_array();
    $issue->setChequestatus($rws[3]);
    $issue->setChequeid($rws[2]);
    
    $sql="SELECT * FROM atm WHERE account_no='".$issue->getSenderid()."'";
    $result=  $mysql->query($sql) or die($mysql->error());
    $rws=  $result->fetch_array();
    $issue->setAtmstatus($rws[3]);
    $issue->setAtmid($rws[2]);
    
    
    if(($issue->getOption() == 'ATM' && (($issue->getAtmstatus() == 'PENDING') || ($issue->getAtmstatus() == 'ISSUED'))) || ($issue->getOption() == 'CHEQUE' && (($issue->getChequestatus() == 'PENDING')||($issue->getChequestatus() == 'ISSUED'))))           
    {
        echo '<script>alert("You have already made a request!");';
   echo 'window.location= "customer_issue_atm.php";</script>';
}
  
elseif($issue->getOption() == 'ATM'){
$sql="insert into atm values('','".$issue->getName()."','".$issue->getSenderid()."','".$issue->getAtmstatus()."')";
$mysql->query($sql) or die($mysql->error());

echo '<script>alert("Request succesfull. You will recieve confirmation from branch very soon.");';
echo 'window.location= "customer_issue_atm.php";</script>';
}
else {
$sql="insert into cheque_book values('','".$issue->getName()."','".$issue->getSenderid()."','".$issue->getChequestatus()."')";
$mysql->query($sql) or die($mysql->error());

echo '<script>alert("Request succesfull. You will recieve confirmation from branch very soon.");';
echo 'window.location= "customer_issue_atm.php";</script>';
}
?>

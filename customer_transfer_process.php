<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   

include 'classes.php';
$trans = new Transaction();

     $trans->setAmount_t($_REQUEST['t_val']);
     $trans->setSenderid($_SESSION["login_id"]);
     $trans->setRecieverid($_REQUEST['transfer']);
     
     //select last transaction id in reciever's passbook.
     include '_inc/dbconn.php';
     $sql="SELECT MAX(transactionid) from passbook".$trans->getRecieverid();
     $result=$mysql->query($sql) or die($mysql->error());
     $rws=  $result->fetch_array();
     $r_last_tid=$rws[0];
    
    //select the details in the last row of reciever's passbook.
    $sql="SELECT * from passbook".$trans->getRecieverid()." WHERE transactionid='$r_last_tid'";
    $result=$mysql->query($sql) or die($mysql->error());
    while($rws= $result->fetch_array()){
    $trans->setAmount_r($rws[7]);
    $trans->setName_r($rws[2]);
    $trans->setBranch_r($rws[3]);
    $trans->setIfsc_r($rws[4]);
    }
    
   //select the last transaction id in the sender's passbook
     $sql="SELECT MAX(transactionid) from passbook".$trans->getSenderid();
     $result=$mysql->query($sql) or die($mysql->error());
     $rws=  $result->fetch_array();
     $s_last_tid=$rws[0];
    
    //select the details in the last row of sender's passbook.
    $sql="SELECT * from passbook".$trans->getSenderid()." WHERE transactionid='$s_last_tid'";
    $result=$mysql->query($sql) or die($mysql->error());
    while($rws= $result->fetch_array()) {
    $trans->setAmount_s($rws[7]);
    $trans->setName_s($rws[2]);
    $trans->setBranch_s($rws[3]);
    $trans->setIfsc_s($rws[4]);
    }
    
    $trans->setDate(date("Y-m-d"));
    
    $s_total=$trans->getAmount_s() - $trans->getAmount_t(); //sender's final balance.
    
    if($trans->getAmount_s() <= 500)
    {
        echo '<script>alert("Your account balance is less than Rs. 500.\n\nYou must maintain a minimum balance of Rs. 500 in order to proceed with the transfer.");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
    elseif($trans->getAmount_t() < 100){
         echo '<script>alert("You cannot transfer less than Rs. 100");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
    elseif($s_total<500)
    {
        echo '<script>alert("You do not have enough balance in your account to proceed this transfer.\n\nYou must maintain a minimum of Rs. 500 in your account.");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
    
    else{ 
        //insert statement into reciever passbook.
        $r_total=$trans->getAmount_r() + $trans->getAmount_t();
        $sql1="insert into passbook".$trans->getRecieverid()." values('','".$trans->getDate()."','".$trans->getName_r()."','".$trans->getBranch_r()."','".$trans->getIfsc_r()."','".$trans->getAmount_r()."','0','$r_total', 'BY ".$trans->getName_r()."')";
        $mysql->query($sql1) or die($mysql->error());
        
        //insert statement into sender passbook.
        $s_total=$trans->getAmount_s() - $trans->getAmount_t();
        $sql2="insert into passbook".$trans->getSenderid()." values('','".$trans->getDate()."','".$trans->getName_s()."','".$trans->getBranch_s()."','".$trans->getIfsc_s()."','0','".$trans->getAmount_t()."','$s_total','TO ".$trans->getName_r()."')";
         $mysql->query($sql2) or die($mysql->error());
        
        echo '<script>alert("Transfer Successful.");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
?>

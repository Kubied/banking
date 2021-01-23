<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
include 'classes.php';

        $benef = new Beneficiary();

                $benef->setSenderid($_SESSION["login_id"]);
                $benef->setSendername($_SESSION["name"]);
                
                $benef->setPayeename($_REQUEST['name']);
                $benef->setAccno($_REQUEST['account_no']);
                $benef->setBranch($_REQUEST['branch_select']);
                $benef->setIfsc($_REQUEST['ifsc_code']);
                
                
                include '_inc/dbconn.php';
                $sql1="SELECT * FROM beneficiary1 WHERE sender_id='".$benef->getSenderid()."' AND reciever_id='".$benef->getAccno()."'";
                $result1=  $mysql->query($sql1);
                $rws1=  $result1->fetch_array();
                $benef->setS1($rws1[1]);
                $benef->setS2($rws1[3]);
                
                
                $sql="SELECT * FROM customer WHERE id='".$benef->getAccno()."'";
                
                $result=  $mysql->query($sql) or die($mysql->error());
                $rws=  $result->fetch_array();
                
                if($benef->getSenderid() == $rws[0]) //can't send request to himself
                {
                echo '<script>alert("You cant add yourself as a beneficiery!");';
                     echo 'window.location= "add_beneficiary.php";</script>';
                }
                
                elseif($benef->getS1() == $benef->getSenderid() && $benef->getS2() == $benef->getAccno())
                {
                    echo '<script>alert("You cant add a beneficiery twice!");';
                     echo 'window.location= "add_beneficiary.php";</script>';
                }
                
                elseif($rws[1]!=$benef->getPayeename() && $rws[0]!=$benef->getAccno() && $rws[11]!=$benef->getBranch() && $rws[12]!=$benef->getIfsc())
                {
                echo '<script>alert("Beneficiary Not Found!\nPlease enter correct details");';
                     echo 'window.location= "add_beneficiary.php";</script>';
                }
                
                
                else{
                     
                $benef->setStatus("PENDING");
                $sql="insert into beneficiary1 values('','".$benef->getSenderid()."','".$benef->getSendername()."','".$benef->getAccno()."','".$benef->getPayeename()."','".$benef->getStatus()."')";
                $mysql->query($sql) or die($mysql->error());
                header("location:display_beneficiary.php");
                }
                

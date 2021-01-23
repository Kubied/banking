<?php

class Account_Summary
{
	private $name;
	private $acc_no;
	private $branch;
	private $last_login;
	private $acc_status;
	private $address;
	private $acc_type;
	private $gender;
	private $mobile
	private $email;
	private $branch_code;
	private $balance;
	
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getAccno()
	{
		return $this->acc_no;
	}
	public function setAccno($acc_no)
	{
		$this->acc_no = $acc_no;
	}
	public function getBranch()
	{
		return $this->branch;
	}
	public function setBranch($branch)
	{
		$this->branch = $branch;
	}
	public function getLastlogin()
	{
		return $this->last_login;
	}
	public function setLastlogin($last_login)
	{
		$this->last_login = $last_login;
	}
	
	public function getAccstatus()
	{
		return $this->acc_status;
	}
	public function setAccstatus($acc_status)
	{
		$this->acc_status = $acc_status;
	}
	public function getAddress()
	{
		return $this->address;
	}
	public function setAddress($address)
	{
		$this->address = $address;
	}
	public function getAcctype()
	{
		return $this->acc_type;
	}
	public function setAcctype($acc_type)
	{
		$this->acc_type = $acc_type;
	}
	public function getGender()
	{
		return $this->gender;
	}
	public function setGender($gender)
	{
		$this->gender = $gender;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function getMobile()
	{
		return $this->mobile;
	}
	public function setMobile($mobile)
	{
		$this->name = $mobile;
	}
	public function getBranchcode()
	{
		return $this->branch_code;
	}
	public function setBranchcode($branch_code)
	{
		$this->branch_code = $branch_code;
	}
	public function getBalance()
	{
		return $this->balance;
	}
	public function setBalance($balance)
	{
		$this->balance = $balance;
	}
	public function showSummary()
	{
	    return '<p>Name: <?php echo $this->name;?></p>
            <p>gender: <?php if($this->getGender()=='M') echo "Male"; else echo "Female";?></p>
            <p>Mobile: <?php echo $this->mobile;?></p>
            <p>Email: <?php echo $this->email;?></p>
            <br>
            <p>Account No: <?php echo $this->acc_no;?></p>
            <p>Branch: <?php echo $this->branch;?></p>
            <p>Branch Code: <?php echo $this->branch_code;?></p>
            <p>Last Login: <?php echo $this->last_login;?></p>
            <br>
            <p>Account status: <?php echo $this->acc_status;?></p>
            <p>Account Type: <?php echo $this->acc_type;?></p>
            <p>Address: <?php echo $this->address;?></p>';
}
}

class Beneficiary extends Account_Summary
{
        private $sender_id;
	private $sender_name;
	private $payee_name;
	private $ifsc;
	private $s1;
	private $s2;
	private $status;
	
	public function getStatus()
	{
		return $this->status;
	}
	public function setStatus($status)
	{
		$this->status = $status;
	}
	public function getS2()
	{
		return $this->s2;
	}
	public function setS2($s2)
	{
		$this->s2 = $s2;
	}
	
	public function getS1()
	{
		return $this->s1;
	}
	public function setS1($s1)
	{
		$this->s1 = $s1;
	}
	
	public function getIfsc()
	{
		return $this->ifsc;
	}
	public function setIfsc($ifsc)
	{
		$this->ifsc = $ifsc;
	}
	
	public function getSenderid()
	{
		return $this->sender_id;
	}
	public function setSenderid($sender_id)
	{
		$this->sender_id = $sender_id;
	}
	public function getSendername()
	{
		return $this->sender_name;
	}
	public function setSendername($sender_name)
	{
		$this->sender_name = $sender_name;
	}
	public function getPayeename()
	{
		return $this->payee_name;
	}
	public function setPayeename($payee_name)
	{
		$this->payee_name = $payee_name;
	}



}

?>

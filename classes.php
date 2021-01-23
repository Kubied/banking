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
}



?>
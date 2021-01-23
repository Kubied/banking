<?php

class Login	
{
	private $username;
	private $password;
	public function getUsername()
	{
		return $this->username;
	}
	public function setUsername($username)
	{
		$this->username = $username;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	
}

class Account_Summary
{
	protected $name;
	protected $acc_no;
	protected $branch;
	protected $last_login;
	protected $acc_status;
	protected $address;
	protected $acc_type;
	protected $gender;
	protected $mobile;
	protected $email;
	protected $branch_code;
	protected $balance;
	
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
            <p>gender: <?php if($this->getGender()=="M") echo "Male"; else echo "Female";?></p>
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
	public function showCustomerSummary()
	{
	   
            return '<p><span class="heading">Account No: </span>  '.$this->acc_no.'</p>
            <p><span class="heading">Branch: </span>'.$this->branch.'</p>
            <p><span class="heading">Branch Code: </span><?php echo $this->branch_code;?></p>
            </div>
            
            <div class="content2">
            <p><span class="heading">Balance: INR </span><?php echo $this->balance;?></p>
            <p><span class="heading">Account status: </span><?php echo $this->acc_status;?></p>
            <p><span class="heading">Last Login: </span><?php echo $this->last_login;?></p>';
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
class Customer extends Account_Summary
{
	private $dob;
	private $nominee;
	private $credit;
	private $password;
	private $date;
	private $id;
	
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function setDate($date)
	{
		$this->date = $date;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	
	public function getCredit()
	{
		return $this->credit;
	}
	public function setCredit($credit)
	{
		$this->credit = $credit;
	}
	
	public function getNominee()
	{
		return $this->nominee;
	}
	public function setNominee($nominee)
	{
		$this->nominee = $nominee;
	}
	public function getDob()
	{
		return $this->dob;
	}
	public function setDob($dob)
	{
		$this->dob = $dob;
	}
	
	
	
}
class Staff extends Account_Summary
{
        private $doj;
	private $dept;
	private $password;
	private $id;
	private $dob;
	private $date;
	public function getDate()
	{
		return $this->date;
	}
	public function setDate($date)
	{
		$this->date = $date;
	}
	public function getDob()
	{
		return $this->dob;
	}
	public function setDob($dob)
	{
		$this->dob = $dob;
	}
	
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($password)
	{
	    $this->password = $password;
	}
	public function getDoj()
	{
		return $this->doj;
	}
	public function setDoj($doj)
	{
		$this->doj = $doj;
	}
	
	public function getDept()
	{
		return $this->dept;
	}
	public function setDept($dept)
	{
		$this->dept = $dept;
	}
	public function showStaff()
	{
	    return '<p><span class="heading">Name: </span><?php echo $this->name;?></p>
            <p><span class="heading">Department: </span><?php echo $this->dept;?></p>
            <p><span class="heading">Email: </span><?php echo $this->email;?></p>
            </div>
             <div class="content2">
            <p><span class="heading">DOJ: </span><?php echo $this->doj;?></p>
            <p><span class="heading">Last Login: </span><?php echo $this->last_login;?></p>';
	}
	
}
class Change_Password
{
    private $old;
	private $new;
	private $again;
	public function getAgain()
	{
		return $this->again;
	}
	public function setAgain($again)
	{
		$this->again = $again;
	}
	
	public function getNew()
	{
		return $this->new;
	}
	public function setNew($new)
	{
		$this->new = $new;
	}
	
	public function getOld()
	{
		return $this->old;
	}
	public function setOld($old)
	{
		$this->old = $old;
	}
	
	
	
}
class Account_Statement
{
private $sender_id;
	private $date1;
	private $date2;
	
	public function getSenderid()
	{
		return $this->sender_id;
	}
	public function setSenderid($sender_id)
	{
		$this->sender_id = $sender_id;
	}
	public function getDate1()
	{
		return $this->date1;
	}
	public function setDate1($date1)
	{
		$this->date1 = $date1;
	}
	public function getDate2()
	{
		return $this->date2;
	}
	public function setDate2($date2)
	{
		$this->date2 = $date2;
	}
	
	
}
?>

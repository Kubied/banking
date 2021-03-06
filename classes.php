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
		$this->mobile = $mobile;
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
	    return '<p>Name: '.$this->name.'</p>
            <p>Gender: '.$this->gender.'</p>
            <p>Mobile: '.$this->mobile.'</p>
            <p>Email: '.$this->email.'</p>
            <br>
            <p>Account No: '.$this->acc_no.'</p>
            <p>Branch: '.$this->branch.'</p>
            <p>Branch Code: '.$this->branch_code.'</p>
            <p>Last Login: '.$this->last_login.'</p>
            <br>
            <p>Account status: '.$this->acc_status.'</p>
            <p>Account Type: '.$this->acc_type.'</p>
            <p>Address: '.$this->address.'</p>';
}
	public function showCustomerSummary()
	{	   
            return '<p><span class="heading">Account No: </span>'.$this->acc_no.'</p>
            <p><span class="heading">Branch: </span>'.$this->branch.'</p>
            <p><span class="heading">Branch Code: </span>'.$this->branch_code.'</p>
            </div>            
            <div class="content2">
            <p><span class="heading">Balance: INR </span>'.$this->balance.'</p>
            <p><span class="heading">Account status: </span>'.$this->acc_status.'</p>
            <p><span class="heading">Last Login: </span>'.$this->last_login.'</p>';
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
	
	public function showDetails()
	{
	return '<p><span class="heading">Name: </span>'.$this->name.'</p>
            <p><span class="heading">gender: </span>'.$this->gender.'</p>
            <p><span class="heading">Mobile: </span>'.$this->mobile.'</p>
            <p><span class="heading">Email: </span>'.$this->email.'</p>
            <p><span class="heading">Address: </span>'.$this->address.'</p>
            </div>
            <div class="content4">
            <p><span class="heading">Account No: </span>'.$this->acc_no.'</p>
            <p><span class="heading">Nominee: </span>'.$this->nominee.'</p>
            <p><span class="heading">Branch: </span>'.$this->branch.'</p>
            <p><span class="heading">Branch Code: </span>'.$this->branch_code.'</p>        
            <p><span class="heading">Account Type: </span>'.$this->acc_type.'</p>';
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
	    return '<p><span class="heading">Name: </span>'.$this->name.'</p>
            <p><span class="heading">Department: </span>'.$this->dept.'</p>
            <p><span class="heading">Email: </span>'.$this->email.'</p>
            </div>
            <div class="content2">
            <p><span class="heading">DOJ: </span>'.$this->doj.'</p>
            <p><span class="heading">Last Login: </span>'.$this->last_login.'</p>';
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
class Transaction
{
        private $sender_id;
	private $amount_t;
	private $reciever_id;
	private $date;
	
	private $name_r;
	private $branch_r;
	private $ifsc_r;
	private $amount_r;
	
	private $name_s;
	private $branch_s;
	private $ifsc_s;
	private $amount_s;
	public function getDate()
	{
		return $this->date;
	}
	public function setDate($date)
	{
		$this->date = $date;
	}
	public function getIfsc_s()
	{
		return $this->ifsc_s;
	}
	public function setIfsc_s($ifsc_s)
	{
		$this->ifsc_s = $ifsc_s;
	}
	
	public function getBranch_s()
	{
		return $this->branch_s;
	}
	public function setBranch_s($branch_s)
	{
		$this->branch_s = $branch_s;
	}
	
	public function getName_s()
	{
		return $this->name_s;
	}
	public function setName_s($name_s)
	{
		$this->name_s = $name_s;
	}
	
	public function getAmount_s()
	{
		return $this->amount_s;
	}
	public function setAmount_s($amount_s)
	{
		$this->amount_s = $amount_s;
	}
	
	public function getIfsc_r()
	{
		return $this->ifsc_r;
	}
	public function setIfsc_r($ifsc_r)
	{
		$this->ifsc_r = $ifsc_r;
	}
	
	public function getBranch_r()
	{
		return $this->branch_r;
	}
	public function setBranch_r($branch_r)
	{
		$this->branch_r = $branch_r;
	}
	
	public function getName_r()
	{
		return $this->name_r;
	}
	public function setName_r($name_r)
	{
		$this->name_r = $name_r;
	}
	
	public function getAmount_r()
	{
		return $this->amount_r;
	}
	public function setAmount_r($amount_r)
	{
		$this->amount_r = $amount_r;
	}
	
	
	public function getRecieverid()
	{
		return $this->reciever_id;
	}
	public function setRecieverid($reciever_id)
	{
		$this->reciever_id = $reciever_id;
	}
	public function getAmount_t()
	{
		return $this->amount_t;
	}
	public function setAmount_t($amount_t)
	{
		$this->amount_t = $amount_t;
	}
	public function getSenderid()
	{
		return $this->sender_id;
	}
	public function setSenderid($sender_id)
	{
		$this->sender_id = $sender_id;
	}
}
class Customer_Issue
{
	private $name;
        private $sender_id;
	private $cheque_status;
	private $cheque_id;
	private $atm_status;
	private $atm_id;
	private $option;
	
	public function getOption()	
	{
		return $this->option;
	}
	public function setOption($option)
	{
		$this->option = $option;
	}
	
	public function getName()	
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getAtmid()	
	{
		return $this->atm_id;
	}
	public function setAtmid($atm_id)
	{
		$this->atm_id = $atm_id;
	}
	public function getAtmstatus()	
	{
		return $this->atm_status;
	}
	public function setAtmstatus($atm_status)
	{
		$this->atm_status = $atm_status;
	}
	public function getChequeid()	
	{
		return $this->cheque_id;
	}
	public function setChequeid($cheque_id)
	{
		$this->cheque_id = $cheque_id;
	}
	
	public function getChequestatus()	
	{
		return $this->cheque_status;
	}
	public function setChequestatus($cheque_status)
	{
		$this->cheque_status = $cheque_status;
	}
	public function getSenderid()	
	{
		return $this->sender_id;
	}
	public function setSenderid($sender_id)
	{
		$this->sender_id = $sender_id;
	}
	
       public function showIssues()
       {
          return '<table align="center">
                  <th>Requests</th><th>Status</th>
                  <tr><td>ATM Card Status: </td><td>'.$this->atm_status.'</td></tr>
                  <tr><td>Cheque Book Status: </td><td>'.$this->cheque_status.'</td></tr>
                  </table>';
       }
}
?>

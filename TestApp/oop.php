<?php

class Person{
	private $name;
	private $email;
	public $du;
	public static $ageLimit = 40 ;

	public function __construct($name,$email)
	{
		$this->name = $name;
		$this->email = $email;
		echo __CLASS__.' person created <br>';
	}

	public function __destruct()
	{
		echo __CLASS__. 'destroyed';
	}

public function getName()
{
	return $this->name ;
}

public function setName($name)
{
	$this->name = $name;
}


public function getEmail()
{
	return $this-> email;
}

public function setEmail($email)
{
	$this-> email = $email;
}

	public function dumm()
	{
		return $this-> du ;
	}

	public static function getAgeLimit()
	{
		return self::$ageLimit;
	}

}

//$person1 = new Person('Jon','Jon@gmail.com');
#echo $person1->getName();

// $person1->name="TestOOPE";

// $person1->du = "val";
// $person1->setName("Tom");

// echo $person1->du;
// echo $person1->dumm();

class Customer extends Person
{
	private $balance;

	public function __construct($name,$email,$balance)
	{
		parent::__construct($name,$email);
		$this->balance = $balance;
		// echo $this->balance;
		echo __CLASS__.' has been created <br>';

	}

	public function setBalance($balance)
	{
		$this->balance = $balance;
	}

	public function getBalance()
	{
		return $this->balance. '<br>';
	}

}

// $cust = new Customer('Test','test@gmail.com',100);
// echo $cust->getBalance();

echo Person::$ageLimit;
echo Person::getAgeLimit();

?>
<?php

class User {
    public $name;
   // private $mobile_no;
    protected $account_no;

    public function setName($nm) {
        return $this->name = $nm;
    }

    public function getName() {
        return $this->name;
    }



    protected function getAccountNO() {
        return $this->account_no;
    }

    protected function setAccountNO($accountNo) {
        $this->account_no = $accountNo; 
    }
}

class Student extends User {


    public function setStudentAccountNO($accountNo) {
        $this->setAccountNO($accountNo); 
    }



    public function getStudentAccountNO() {
        return $this->getAccountNO(); 
    }
}

$u1 = new User();
$u1->setName('Ayon');
echo $u1->getName(); 



echo '<br>';

$s1 = new Student();
$s1->setName('abc');
echo $s1->getName(); 

$s1->setStudentAccountNO('7687687678'); 
echo '<br>Account Number: ' . $s1->getStudentAccountNO();

?>



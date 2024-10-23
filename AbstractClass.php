<?php

abstract class User {
    public $username;
    abstract public function setUsername($uname); 
    abstract public function getUsername();
}

class Customer extends User {

    public $address;


    public function setUsername($uname) {
        $this->username = $uname; 
    }

    public function getUsername() {
        return $this->username; 
    }

     


    public function setAddress($adrs){
        
        $this-> address= $adrs;

    } 

    public function getAddress(){
        
      return  $this-> address;

    } 



}




class Admin extends User {

     public $admin_id;
   
    public function setUsername($uname) {
        $this->username = $uname; 
    }

    public function getUsername() {
        return $this->username; 
    }



    public function setID($id) {
        $this->admin_id = $id; 
    }

    public function getID() {
        return $this->admin_id; 
    }






}



echo 'Customer Informations :';

echo'<br>';


$customer = new Customer();

$customer->setUsername('Ayon');
echo $customer->getUsername(); 

echo'<br>';

$customer->setAddress('Uttara-12');
echo $customer->getAddress(); 

echo'<br>';


echo 'Admin Informations :';


echo'<br>';


$admin = new Admin();

$admin->setUsername('Ashik');
echo $admin->getUsername(); 

echo'<br>';


$admin->setID(54345);
echo $admin->getID(); 








?>

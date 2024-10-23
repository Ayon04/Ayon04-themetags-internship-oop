<?php
class  User {

    public $userID;

    
    public function setUserID($id){
          
        $this->userID = $id;
                                 
    }

    public function getUserID(){

        return $this->userID;
    }

}


trait Human{

    public $name; 
  
    public function setName($nm){
  
         $this->name = $nm;
        
    }

    public function getName(){
      

        return  $this -> name;
        
    }


}


trait Activits{

   

    public function getActivites(){
      

        return  'Studying,Sleeping,Eating,Watching Movies,Playing Games';
        
    }


}


class Student extends User {

use Human,Activits;

public function getClassname(){



     return 'Student Class';
}


}


$stu = new Student();

$stu->setName('Akash Kumar Ghosh');
echo $stu->getName();

echo '<br>';
echo '<br>';


$stu-> setUserID(3445345);
echo $stu ->getUserID();


echo '<br>';
echo '<br>';


echo $stu ->getActivites();

echo '<br>';
echo '<br>';

echo $stu ->getClassname();




?>
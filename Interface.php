<?php

interface Human {
    public function Working ();
    public function Sleeping();
    public function Eating();
}


class Student implements Human{

    public function Working(){

        return 'Working on home task';
        
    }

    public function Sleeping()
    {
        return 'Sleeping after completing study ';
    }

    public function Eating()
    {
        
        return 'Eating healthy foods';

    }


}



class Programmer implements Human{

    public function Working(){

        return 'working on a project';
    }
    public function Eating(){

        return 'eating ';
    }
    public function Sleeping(){

        return 'Sleeping after completing all the due task';
    }

    public function SearchingNewJobs(){

        return  'searching for a new jobs';
    }


}


$student = new Student();

echo $student-> Working();
echo '<br>';
echo $student-> Eating();
echo '<br>';
echo $student-> Sleeping();


echo '<br>';
echo '<br>';


$programmer = new Programmer();

echo $programmer-> Working();
echo '<br>';
echo $programmer-> Eating();
echo '<br>';
echo $programmer-> Sleeping();

echo '<br>';
echo $programmer-> SearchingNewJobs();












?>
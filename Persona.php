<?php 

class Persona{

  public $name;
  public $lastname;
  public $phone;
  public $id;
  public $age;
  public $sexo;
  public $hobbies;
  public $people;


function load_person($Name,$Lastname,$ID,$Age,$Phone,$Sex,$Hobbies){
	$this->name = $Name;
	$this->lastname = $Lastname;
	$this->id = $ID;
	$this->age = $Age;
	$this->phone= $Phone;
	$this->sex = $Sex;
	$this->hobbies=$Hobbies;
}

function __construct(){
	$this->load_person("Valeria","Rojas","1","19","111","Femenino","Read and listen Music");
}
}
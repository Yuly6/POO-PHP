<?php

 abstract class Person {


private $name;
private $surname;
private $salary;
private $telephones = [];

public  function __construct ($name, $surname, $salary = -1){
    $this->name = $name;
    $this->surname = $surname;
    $this->salary = $salary;




public function getName()
{
return $this->name;
}


public function setName($name): self
{
$this->name = $name;

return $this;
}

public function getSurname()
{
return $this->surname;
}

public function setSurname($surname): self
{
$this->surname = $surname;

return $this;
}

public function getSalary()
{
return $this->salary;
}

public function setSalary($salary): self
{
$this->salary = $salary;

return $this;
}

public abstract function getFullName(): string{

}

public abstract function payTaxes(): float{
    
}

public abstract function addTelephones($tel): int {
    
}

public abstract function listTelephones(): string{
    
}

public abstract function emptyTelephones(): void{
    
}

public abstract function toHtml(): string{
    
}

public abstract function getFullName(): string{
    
}

public abstract function calculateSalary(): float{
    
}

}



?>
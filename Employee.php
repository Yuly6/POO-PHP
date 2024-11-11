<?php

class Employee extends Person{


    public function __construct( string $name, $surname, $salary = -1, $telephones = []){
        parent::__construct($name, $surname, $salary, $telephones);
    }



    public function getFullName(): string{
        return " Nombre: {$this->name}  Apellido: {$this-> surname}";
    }
    

    public  function payTaxes(): float{
        $tax = $this-> salary * ($tax /100);
        return $this-> salary - $tax;
    
}

        
    }
    
    public function  addTelephones(int $tel): int {
        $this-> telephones[] = ($tel); //porque telephones is
        return $tel;

        //return count($this->telephones);
        
    }
    
    public function listTelephones(): string{
        
    }
    
    public  function emptyTelephones(): void{
        
    }
    
    public  function toHtml(): string{
        
    }
    
    public function getFullName(): string{
        
    }
    
    public function calculateSalary(): float{
        
    }


}

?>
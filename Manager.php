
<?php

class Manager extends Person{

private $seniority;



    
    public  function getFullName(): string{

    }
    
    public  function payTaxes(): float{
        
    }
    
    public function addTelephones($tel): int {
        
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



/**
 * Get the value of seniority
 */
public function getSeniority()
{
return $this->seniority;
}

/**
 * Set the value of seniority
 */
public function setSeniority($seniority): self
{
$this->seniority = $seniority;

return $this;
}
}



?>
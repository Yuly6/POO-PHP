<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
class Persona {
    //Atributos
    private String $nombre;
    private int $edad;

    private bool $conduce; 

    //Constructores
    //getters y setters
    public function getNombre(): String {
        return $this->nombre;

    }
    public function setNombre(String $nombre):void{
        $this->nombre = $nombre;
    }
    public function getedad(): int {
        return $this->edad;

}
    public function setedad(int $edad):void {

        $this->edad = $edad;
}
    public function isConduce():bool{
        return $this->conduce;

    }

    //Métodos
    public function esMayorDeEdad():bool{
        if ($this->edad>=18){
            return true;
        }
    return false;
    }
    public function aprendeAConducir ($tiempo):bool{
       
        if ($this->conduce){
        return false;
        }else{
            echo"He aprendido a conducir en $tiempo meses";
            $this-> conduce = true;
            return true;
        }
    }

}

$p = new Persona();
$p-> setNombre("Juan");
$p->setedad("18");
$p->isConduce(true);
$p->esMayorDeEdad(true);


?>
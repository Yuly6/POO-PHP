<?php
//declaramos las variables
class Empleado{
private $nombre ;
private $apellidos ;
private $sueldo ;
private $telefono = [];

//Constructor

public  function __construct ($nombre, $apellidos, $sueldo = -1){
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->sueldo = $sueldo;

}

//getters and setters
public function getNombre(){
return $this->nombre;
}


public function setNombre($nombre): self{
$this->nombre = $nombre;
return $this;
}


public function getApellidos(){
return $this->apellidos;
}


public function setApellidos($apellidos): self{
$this->apellidos = $apellidos;
return $this;
}


public function getSueldo(){
return $this->sueldo;
}


public function setSueldo($sueldo): self{
$this->sueldo = $sueldo;
return $this;
}

// Método __toString para imprimir de forma cómoda

public function __toString(){
    return "Nombre: {$this->nombre}, Apellidos: {$this->apellidos}, Sueldo: {$this->sueldo}";
}


  // Método para obtener el nombre completo
    public function obtenerNombreCompleto() : string{
        return "{$this->nombre}{$this->apellidos}";
    
    }

    public function pagarImpuesto(): float{
        // Si no recibe sueldo, se pondrá el valor -1.
        if($this->sueldo == -1){
            return -1;
        }
        
        $impuestos = 0;
        $sueldo = $this->sueldo;

        if($sueldo > 60000){
            $impuestos = $impuestos +($sueldo - 60000 * 0.45);
            $sueldo = 60000;
        }

        if($sueldo > 35200){
            $impuestos = $impuestos +($sueldo - 35200 * 0.37);
            $sueldo = 35200;
        }

        if($sueldo > 20200){
            $impuestos = $impuestos +($sueldo - 20200 * 0.30);
            $sueldo = 20200;
        }
        if($sueldo > 12450){
            $impuestos = $impuestos +($sueldo - 12450 * 0.30);
            $sueldo = 12450;
        }
        if($sueldo > 20200){
            $impuestos = $impuestos +($sueldo - 20200 * 0.30);
            $sueldo =20200;
        }
        if($sueldo > 0){
            $impuestos = $impuestos +$sueldo * 0.30;
            $sueldo =20200;
        }

        return $impuestos;

    }


 // Métodos para manejar los teléfonos

 public function anadirTelefono(string $nTelefono ): void{
    $this-> telefono[] = $nTelefono; // Añade un teléfono al array.
 }

 public function listarTelefono():string{
 return implode(",", $this-> telefono); // Devuelve una cadena con los teléfonos separados por comas.
 }

 public function  vaciarTelefonos(): void  {
    $this-> telefono = []; //Limpia el array de teléfonos.
    
 }

 public function toHtml(): string{ //function toHtml(): Declara el método toHtml, que se encarga de construir y devolver un string de HTML.
    // Crea un párrafo HTML (<p>...</p>) con la información básica del empleado/a.
    $html = "<p>Nombre: {$this->nombre }, Apellidos: {$this-> apellidos}, Sueldo: {$this->sueldo}, Impuestos: {$this->pagarImpuesto()}</p>"; //{$this->pagarImpuestos()}: Llama al método pagarImpuestos() para obtener la cantidad de impuestos calculada y la incluye en el HTML.
    if (!empty($this->telefono)){ //Comprueba si el array $this->telefono no está vacío usando empty().
      //Si $this->telefonos contiene al menos un teléfono, entra en el bloque if para mostrar una lista con estos teléfonos.  
    
      //$html .= "<ul>";: Usa .=, que añade al contenido actual de $html. En este caso, añade una etiqueta de apertura <ul>, que inicia una lista desordenada en HTML.
      $html .= "<ul>";
      foreach($this-> telefono as $nTelefono){
        $html .= "<li> { $nTelefono } </li>";inde
      }
      
      $html.= "</ul>";
    }
    return $html;
}

}
?>
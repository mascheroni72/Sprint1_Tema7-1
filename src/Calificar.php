<?php
class Calificar{
    
    public function __construct(private int $nota){} 
    public function calificarNivelAlto (): bool{
            return $this->nota >= 60;
    }
    public function calificarNivelMedio (): bool{
            return $this->nota >= 45 && $this->nota <= 59;
    }    
    public function calificarNivelBajo (): bool{
                return $this->nota >= 33 && $this->nota <= 44;
    }
    public function calificarSuspendido (): bool{
                    return $this->nota < 33;  
    } 
}          
 ?>
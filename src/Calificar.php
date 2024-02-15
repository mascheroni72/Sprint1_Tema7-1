<?php
class Calificar {
    protected int $nota;
    public function __construct(int $nota){
        $this->nota = $nota;
    } 
    public function calificarNivel(): string {
        if ($this->nota >= 60) {
                return "Tienes un nivel para primera división";
        }elseif($this->nota >= 45) {
                return "Tu nivel es de segunda división";
        }elseif ($this->nota >= 33) {
                return "Tu nivel se corresponde con la tercera división";
        }else {
                return "Has suspendido";  
        }
    }    
}
$nota = 72;
$calificar = new Calificar($nota);
echo $calificar ->calificarNivel();

 ?>
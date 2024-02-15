<?php 
use PHPUnit\Framework\TestCase;

class CalificarTest extends TestCase {
    protected $nota;
    public function setUp(): void { 
        $this->nota = new Calificar(72); 
    }
    public function testCalificarNivelAlto(){
    $this->assertEquals("Tienes un nivel para primera división",$this->nota->calificarNivel());
    }
    public function testCalificarNivelMedio(){ 
	$nota = new Calificar (53);
    $this->assertEquals("Tu nivel es de segunda división",$nota->calificarNivel());
    }
    public function testCalificarNivelBajo(){ 
	$nota = new Calificar (37);
        $this->assertEquals("Tu nivel se corresponde con la tercera división", $nota->calificarNivel());
    }
    public function testCalificarSuspendido(){ 
	$nota = new Calificar (29);
        $this->assertEquals("Has suspendido", $nota->calificarNivel());
    }
}
?>
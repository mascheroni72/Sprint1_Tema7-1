<?php 
use PHPUnit\Framework\TestCase;

class CalificarTest extends TestCase {
    private $nota;
    public function setUp(): void { 
        $this->nota = new Calificar(47); 
    }
    public function testCalificarNivelAlto(){
    $this->assertTrue($this->nota->calificarNivelAlto());
    }
    public function testCalificarNivelMedio(){ 
    $this->assertTrue($this->nota->calificarNivelMedio());
    }
    public function testCalificarNivelBajo(){ 
        $this->assertTrue($this->nota->calificarNivelBajo());
    }
    public function testCalificarSuspendido(){ 
        $this->assertTrue($this->nota->calificarSuspendido());
    }
}
?>

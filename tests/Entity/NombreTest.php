<?php
namespace App\Tests\Entity;
use App\Entity\Nombre;
use PHPUnit\Framework\TestCase;
class NombreTest extends TestCase{
  
  public function testNombre(){
        $nombre=new Nombre(0);
        $this->assertSame(0,$nombre->fact());
    }
    public function testNombre_fact(){
        $nombre=new Nombre(4);
        $this->assertSame(24,$nombre->fact());

    }
    /** *@dataProvider listFact */
    public function testfacte($n,$f){
        $nb=new Nombre($n);
        $this->assertSame($f,$nb->fact());
    }
    public function listFact(){
        return [[1,1],[3,6],[2,2],[4,24],[5,120]];
    }

    
}
?>
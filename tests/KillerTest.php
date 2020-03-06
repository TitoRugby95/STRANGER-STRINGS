<?php
use PHPUnit\Framework\TestCase;
use App\Killer;


final class KillerTest extends TestCase
{
    public function testRandomKill ()
    {  
    $name = "Arturo";
    
    $deadCoders = 3;

    $killer = new Killer();
    $resultado = $killer->random();

    $this->assertSame($name, $resultado);

    }

    public function testAllDead ()
    {
       $deadCoders = 24;

        $killer = new Killer();
        $resultado = $killer->random();

        $this->assertSame('AllDead', $resultado); 
    }



}
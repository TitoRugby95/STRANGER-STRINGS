<?php
use PHPUnit\Framework\TestCase;
use App\Killer;


final class KillerTest extends TestCase
{
    public function testRandomKill ()
    {  
        $name = "Arturo";

    $killer = new Killer();
    $resultado = $killer->random();

    $this->assertSame($name, $resultado);

    }

    public function testAllDead ()
    {
        $numberCadaver = 24;

        $killer = new killer();
        $resultado = $killer->random();

        $this->assertSame(' AllDead ', $resultado); 
    }



}
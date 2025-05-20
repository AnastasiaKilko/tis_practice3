<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;
class CollectTest extends TestCase
{
    public function testOnly()
    {
        $collect = new Collect(['id' => 2135, 'name' => 'Nastya', 'city' => 'Tomsk']);
        $only = $collect->only('id', 'city');
        $expected = ['id' => 2135, 'city' => 'Tomsk'];
        $this->assertSame($expected, $only->toArray());
    }
    public function testCount()
    {
        $collect = new Collect\Collect(['id' => 2135, 'name' => 'Nastya', 'city' => 'Tomsk']);
        $this->assertSame(3, $collect->count());
    }
    public function testFirst()
    {
        $collect = new Collect(['id' => 2135, 'name' => 'Nastya', 'city' => 'Tomsk']);
        $this->assertSame(2135, $collect->first());
    }
    public function testToArray()
    {
        $data = ['id' => 2135, 'name' => 'Nastya', 'city' => 'Tomsk'];
        $collect = new Collect($data);
        $this->assertSame($data, $collect->toArray());
    }
}
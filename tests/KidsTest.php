<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class KidsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShouldReturnEmptyArray()
    {
        $this->get('/api/kids/');
        $this->seeJson([]);
        $this->assertEquals([],[]);
    }
}

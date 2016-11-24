<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateCategories extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/register')
			->type('Test 1', 'name')
			->type('test1@gmail.com', 'email')
			->check('terms')
			->press('Register')
			->seePageIs('/forum');
    }
}

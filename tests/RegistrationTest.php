<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testUserLogin()
    {
        $this->call('get', 'auth/login');

       // $this->assertResponseOk();

        
        $this->visit('/')
             ->click('Soy estudiante de INTEC')
             ->seePageIs('auth/login');

       $this->type('1054485@est.intec.edu.do', 'email')
            ->type('secret', 'password')
            ->seePageIs('/auth/login');    
    }
}

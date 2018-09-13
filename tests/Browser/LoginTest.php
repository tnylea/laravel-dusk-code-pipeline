<?php

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class Test extends DuskTestCase
{

    /**
     * My test implementation
     */
    public function testMiddlewareIsFantastic()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/');
            $browser->clickLink('Login');
            $browser->visit('/login');
            $browser->type('email', 'johndoe@gmail.com');
            $browser->type('password', 'password123');
            $browser->press('Login');
            $browser->assertPathIs('/home');
        });

    }
}
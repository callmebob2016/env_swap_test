<?php

namespace App\Tests;

class DefaultCest
{
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('/delicious/gnome');
        $I->seeResponseCodeIs(200);
        $I->see('test');
        $I->dontSee('dev');
    }
}

<?php

namespace App\Tests;

class SomeTestCest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/delicious/gnome');
        $I->seeResponseCodeIs(200);
        $I->dontSee('dev');
        $I->see('test');
    }
}

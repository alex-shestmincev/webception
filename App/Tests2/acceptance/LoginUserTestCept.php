<?php 
$I = new WebGuy($scenario);
$I->wantTo('Sign in');
$I->amOnPage('/');
$I->click('Мои объявления');
$I->see('Вход на сайт','h1');
$I->fillField('username', 'klik1301@ya.ru');
$I->fillField('password', '111111');
$I->click('#submitbutton');
$I->see('Мои объявления','h1');
$I->amOnPage('/auth/logout');
$I->see('Доска бесплатных объявлений','h1');

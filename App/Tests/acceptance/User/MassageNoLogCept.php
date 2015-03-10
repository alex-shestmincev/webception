<?php 
$I = new WebGuy($scenario);
$I->wantTo('write massage as no login');
$I->amOnPage('/');

//Login
$I->click('Продажа');
$I->click('.search_objavl a');
$I->click('Написать автору');
$I->fillField('Ваше имя', 'Оля');
$I->fillField('Ваш E-mail', 'a@mfgfg.rfgg');
$I->fillField('comment', 'kfjgfgjlkfd');
$I->click('Отправить сообщение');
$I->wait(1);
$I->see('Необходимо зарегистрироваться и авторизаться на сайте, чтобы отправлять письма');

<?php
$I = new ApiGuy($scenario);
$I->wantTo('Get list cities by title LIKE "хaрь" ');
$I->sendGet('getCityOblByName');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('success');


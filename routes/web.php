<?php

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'DashboardController@index');
});

Route::post('/webhook/github', 'GitHubWebhookController@gitRepoReceivedPush');

Route::ohDearWebhooks('/oh-dear-webhooks');

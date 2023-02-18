
<?php

use Illuminate\Config\Repository;
use OpenAI\Client;
use OpenAI\Laravel\Exceptions\ApiKeyIsMissing;
use OpenAI\Laravel\ServiceProvider;

it('binds the client on the container', function () {
    $app = app();

    $app->bind('config', fn () => new Repository([
        'openai' => [
            'api_key' => 'test',
        ],
    ]));

    (new ServiceProvider($app))->register();

    expect($app->get(Client::class))->toBeInstanceOf(Client::class);
});

it('binds the client on the container as singleton', function () {
    $app = app();

    $app->bind('config', fn () => new Repository([
        'openai' => [
            'api_key' => 'test',
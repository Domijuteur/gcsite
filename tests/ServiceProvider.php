
<?php

use Illuminate\Config\Repository;
use OpenAI\Client;
use OpenAI\Laravel\Exceptions\ApiKeyIsMissing;
use OpenAI\Laravel\ServiceProvider;

it('binds the client on the container', function () {
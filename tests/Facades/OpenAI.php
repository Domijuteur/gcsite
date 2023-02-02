
<?php

use Illuminate\Config\Repository;
use OpenAI\Laravel\Facades\OpenAI;
use OpenAI\Laravel\ServiceProvider;
use OpenAI\Resources\Completions;

it('resolves resources', function () {
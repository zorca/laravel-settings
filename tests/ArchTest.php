<?php

use Illuminate\Database\Eloquent\Model;

it('will not use debugging functions')
    ->group('arch')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'ddd'])
    ->each->not->toBeUsed();

test('models are configured correctly and are extendable')
    ->expect('Inupress\LaravelSettings\Models')
    ->classes()
    ->toExtend(Model::class)
    ->not->toBeFinal();

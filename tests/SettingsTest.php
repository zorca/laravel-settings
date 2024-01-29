<?php

use Inupress\LaravelSettings\Models\Setting as SettingModel;

it('gets persisted setting values with simple property and string value type', function () {
    SettingModel::set('foo', 'bar');

    expect(SettingModel::get('foo'))->toBe('bar');
});

it('gets persisted setting values with namespaced property and string value type', function () {
    SettingModel::set('namespace::foo', 'bar');

    expect(SettingModel::get('namespace::foo'))->toBe('bar');
});

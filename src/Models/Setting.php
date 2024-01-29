<?php

namespace Inupress\LaravelSettings\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $namespace
 * @property string $key
 * @property mixed $value
 */
class Setting extends Model
{
    protected $guarded = ['id'];

    public static function get(string $property)
    {
        $query = self::query()
            ->whereNull('namespace')
            ->orWhere('namespace', '=', '')
            ->where('key', $property);
        if (str_contains($property, '::')) {
            [$namespace, $key] = explode('::', $property);
            $query = self::query()
                ->where('namespace', $namespace)
                ->where('key', $key);
        }

        $setting = $query->first('value');

        if ($setting === null) {
            return null;
        }

        return json_decode($setting->getAttribute('value'));
    }

    public static function set(string $property, $value = null)
    {
        $attributes = ['key' => $property];

        if (str_contains($property, '::')) {
            [$namespace, $key] = explode('::', $property);
            $attributes = ['namespace' => $namespace, 'key' => $key];
        }

        return static::updateOrCreate($attributes, ['value' => json_encode($value)]);
    }
}

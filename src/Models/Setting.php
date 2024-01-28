<?php

namespace Inupress\LaravelSettings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

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
}

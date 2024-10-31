<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Users extends Model
{
    protected $table = 'users';

    protected function name(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucwords($value);
            }
        );
    }

    protected function lastname(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucwords($value);
            }
        );
    }

    protected function address(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucwords($value);
            }
        );
    }

    protected function email(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
        );
    }
}

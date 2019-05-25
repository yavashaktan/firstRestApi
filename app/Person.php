<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 * @method static create(array $all)
 */
class Person extends Model
{
    protected $table = 'people';
    protected $fillable = [
        'firstName',
        'lastName',
        'gsm',
        'email',
        'city'
    ];
}

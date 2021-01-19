<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'file_name', 'is_completed',
    ];
}

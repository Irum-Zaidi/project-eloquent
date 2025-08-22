<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $timestamps = false;

    // protected $guarded = []; // This allows mass assignment for all fields
    // Alternatively, you can specify the fillable fields explicitly:
    // protected $fillable = ['name', 'email', 'city'];
    protected $fillable = ['name', 'email', 'age', 'city'];
}

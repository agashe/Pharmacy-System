<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    /**
     * All fields are mass assignable.
     */
    protected $guarded = [];

    /**
     * validation rules
     */
    public $rules = [
        'name' => 'required',
        'address' => 'required',
        'logo' => 'nullbale|file',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
        'title' => 'required',
        'image' => 'nullbale|file',
    ];

    /**
     * Retrieve all pharmacies have this product
     * 
     * @return Collection
     */
    public function pharmacies()
    {
        return $this->belongsToMany(\App\Models\Pharmacy::class);
    }
}

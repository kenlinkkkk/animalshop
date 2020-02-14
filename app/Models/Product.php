<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'short_tag', 'pictures', 'unit_type', 'price', 'description', 'status'
    ];
}

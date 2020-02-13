<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name', 'phone_number', 'email', 'address'
    ];

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }
}

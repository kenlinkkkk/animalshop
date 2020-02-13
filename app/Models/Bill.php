<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';

    protected $fillable = [
        'id_customer', 'cart', 'status'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}

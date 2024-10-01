<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'price',
        'title',
        'description',
        'status',
        'freelancer_id',
        'customer_id',
        'mark',
        'review'
    ];

    public function freelancer()
    {
        return $this->belongsTo(User::class, 'freelancer_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}

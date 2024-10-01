<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends UserRole
{
    public function getRoleName(): string
    {
        return 'Customer';
    }

    protected static function booted()
    {
        static::addGlobalScope('role', function (\Illuminate\Database\Eloquent\Builder $builder) {
            $builder->where('role_id', 1); 
        });
    }
    protected $hidden = ['portfolio_url', 'description'];
}

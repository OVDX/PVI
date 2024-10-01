<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends UserRole
{
    public function getRoleName(): string
    {
        return 'Admin';
    }

    protected static function booted()
    {
        static::addGlobalScope('role', function (\Illuminate\Database\Eloquent\Builder $builder) {
            $builder->where('role_id', 3); 
        });
    }

    protected $hidden = ['photo_url', 'portfolio_url', 'description'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends UserRole
{
    public function getRoleName(): string
    {
        return 'Freelancer';
    }

    protected static function booted()
    {
        static::addGlobalScope('role', function (\Illuminate\Database\Eloquent\Builder $builder) {
            $builder->where('role_id', 2); 
        });
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_in_user', 'user_id', 'tag_id');
    }
    protected $fillable = ['name', 'email', 'password', 'role_id', 'photo_url', 'portfolio_url', 'description'];
}

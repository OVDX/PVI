<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password', 'role_id'];

    public function isEmailVerified()
    {
        return !is_null($this->email_verified_at);
    }

    abstract public function getRoleName(): string;
}

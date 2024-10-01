<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function freelancers()
    {
        return $this->belongsToMany(Freelancer::class, 'tag_in_user', 'tag_id', 'user_id');
    }

}
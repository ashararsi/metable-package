<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = ['tenant_hash'];



    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}

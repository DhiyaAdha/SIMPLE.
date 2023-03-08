<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    public function pegawais()
    {
        return $this->hasOne(Pegawai::class, 'role_id');
    }
}
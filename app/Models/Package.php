<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'pack_name',
        'pack_description',
        'total',
        'duration',
    ];

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}

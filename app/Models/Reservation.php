<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'end_date',
        'remaining_date',
        'number_people',
        'status',
        'destination_id',
        'client_id',
        'package_id',
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function destination() {
        return $this->belongsTo(Destination::class);
    }

    public function package() {
        return $this->belongsTo(Package::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['property_id', 'room_no', 'image', 'description'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function beds()
    {
        return $this->hasMany(Bed::class);
    }

}

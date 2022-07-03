<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the shisha that this device is connected to
     */
    public function shisha()
    {
        return $this->belongsTo(Shisha::class);
    }

    /**
     * Get all the device data
     */
    public function data()
    {
        return $this->hasMany(DeviceData::class);
    }
}

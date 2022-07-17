<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceData extends Model
{
    use HasFactory;
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    protected $dateFormat = 'Y-m-d H:i:s.u';
    

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start',
        'end',
        'created_at',
        'updated_at'
    ];

    protected $appends = [
        'delta'
    ];

    /**
     * Get all the device data
     */
    public function data()
    {
        return $this->belongsTo(Device::class);
    }

    /**
     * 
     */
    public function getDeltaAttribute()
    {
        $diff = $this->end->diff($this->start);
        
        return $diff->s + $diff->f;
    }
}

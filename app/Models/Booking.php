<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Booking extends Model
{
    use HasFactory,softDeletes;

    protected $fillable = ['customer_name','customer_email','customer_phone','customer_address','code_booking','booking_date','booking_hour','service_id','car_id','mechanic_id','is_paid'];


    /**
     * Get the car that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $fillable = [
        'customer_id',
        'car_id',
        'destination',
        'pickup_method',
        'pickup_area',
        'pickup_date',
        'pickup_time',
        'return_date',
        'return_time',
        'renter_license',
        'renter_ic',
        'renter_license_back',
        'renter_ic_back',
        'renter_selfie',
        'payment_receipt'
    ];

    public function setFilenameAttribute($value)
    {
        $this->attributes['renter_license'] = json_encode($value);
        $this->attributes['renter_license_back'] = json_encode($value);
        $this->attributes['renter_ic'] = json_encode($value);
        $this->attributes['renter_ic_back'] = json_encode($value);
        $this->attributes['renter_selfie'] = json_encode($value);
        $this->attributes['payment_receipt'] = json_encode($value);
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fitting extends Model
{
    use HasFactory;

    protected $fillable = [
        'fittings_id',
        'order_id',
        'staff_id',
        'provider_id',
        'date',
        'comment',
        'hash',
        'home',
        'clone',
        'clone_size',
        'purchase',
    ];

    protected $casts = [
        'date' => 'date',
        'add_ts' => 'datetime',
    ];

    public function fitting()
    {
        return $this->belongsTo(Fitting::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

//    public function staff()
//    {
//        return $this->belongsTo(Staff::class);
//    }
//
//    public function provider()
//    {
//        return $this->belongsTo(Provider::class);
//    }
}

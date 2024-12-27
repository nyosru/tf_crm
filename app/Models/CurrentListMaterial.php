<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrentListMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'fittings_id',
        'provider_id',
        'staff_id',
        'date',
        'price',
        'volume',
        'status',
        'clone',
        'hash',
        'save',
        'warehouse',
        'status_provider',
        'status_provider_hash',
        'purchase',
        'update_status',
        'update_status_staff',
        'file_hash_new',
        'save_key',
        'complex',
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

//    public function provider()
//    {
//        return $this->belongsTo(Provider::class);
//    }
//
//    public function staff()
//    {
//        return $this->belongsTo(Staff::class);
//    }
//
//    public function warehouse()
//    {
//        return $this->belongsTo(Warehouse::class);
//    }
//
//    public function statusProvider()
//    {
//        return $this->belongsTo(StatusProvider::class);
//    }
//
//    public function statusProviderHash()
//    {
//        return $this->belongsTo(StatusProvider::class, 'status_provider_hash');
//    }
//
//    public function purchase()
//    {
//        return $this->belongsTo(Purchase::class);
//    }
//
//    public function updateStatus()
//    {
//        return $this->belongsTo(UpdateStatus::class);
//    }
//
//    public function updateStatusStaff()
//    {
//        return $this->belongsTo(UpdateStatusStaff::class);
//    }
//
//    public function fileHashNew()
//    {
//        return $this->belongsTo(FileHashNew::class);
//    }
//
//    public function saveKey()
//    {
//        return $this->belongsTo(SaveKey::class);
//    }
//
//    public function complex()
//    {
//        return $this->belongsTo(Complex::class);
//    }
}

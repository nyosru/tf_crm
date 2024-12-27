<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrentListHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'provider_id2',
        'staff_id',
        'materials',
        'comments',
        'warehouse_id',
        'date',
        'current_info_table',
        'punct',
    ];

    protected $casts = [
        'date' => 'date',
        'add_ts' => 'datetime',
    ];

//    public function provider()
//    {
//        return $this->belongsTo(Provider::class);
//    }
//
//    public function provider2()
//    {
//        return $this->belongsTo(Provider::class, 'provider_id2');
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
//    public function materials()
//    {
//        return $this->hasOne(Materials::class);
//    }
//
//    public function comments()
//    {
//        return $this->hasMany(Comments::class);
//    }
//
//    public function currentInfoTable()
//    {
//        return $this->hasOne(CurrentInfoTable::class);
//    }
//
//    public function punct()
//    {
//        return $this->hasMany(Punctuation::class);
//    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseLog extends Model
{

    use HasFactory;

    protected $fillable = [
        'warehouse_id',
        'staff_id',
        'comment',
        'fitting_id',
        'was',
        'written_off',
        'remander',
        'status',
        'minusorder_id',
        'clone',
        'writes',
        'comment_text',
        'material_id',
        'order_id'
    ];

    protected $casts = [
        'add_ts' => 'datetime',
        'was' => 'double(9,2)',
        'written_off' => 'double(9,2)',
        'remander' => 'double(9,2)',
    ];

//    public function staff()
//    {
//        return $this->belongsTo(Staff::class);
//    }

}

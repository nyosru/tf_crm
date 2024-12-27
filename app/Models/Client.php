<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;

    protected $fillable = [
        'name_i',
        'name_f',
        'name_o',
        'phone',
        'extra_contacts',
        'address',
        'city',
        'street',
        'building',
        'building_part',
        'cvartira',
        'floor',
        'lift',
        'email',
        'comment',
        'physical_person',
        'status',
        'forma',
        'avatar',
        'passport',
        'seria_passport',
        'nomer_passport',
        'date_passport',
        'cod_passport',
        'ur_passport',
        'ur_name',
        'name_company',
        'active'
    ];

    protected $guarded = [];

    protected $casts = [
        'extra_contacts' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}

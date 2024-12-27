<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    protected $casts = [
        'add_ts' => 'datetime',
        'telegram_chat_id' => 'integer',
        'have_telegram_access' => 'boolean',
        'have_crm_access' => 'boolean',
        'is_chief' => 'boolean',
        'is_manager' => 'boolean',
        'access_table' => 'boolean',
        'access_regedit' => 'boolean',
        'access_leads' => 'boolean',
        'access_accounting' => 'boolean',
        'access_schedule' => 'boolean',
        'access_contracts' => 'boolean',
        'status' => 'boolean',
        'access_orders' => 'boolean',
        'access_clients' => 'boolean',
        'access_staff' => 'boolean',
        'access_providers' => 'boolean',
        'access_warehouse' => 'boolean',
        'access_supply' => 'boolean',
        'access_services' => 'boolean',
        'menu' => 'integer',
        'access_orders_all' => 'boolean',
        'access_files' => 'boolean',
        'access_fittings' => 'boolean',
        'access_tfmf' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'email',
        'telegram_chat_id',
        'have_telegram_access',
        'have_crm_access',
        'department',
        'phone',
        'address',
        'is_chief',
        'is_manager',
        'access_table',
        'access_regedit',
        'access_leads',
        'access_accounting',
        'access_schedule',
        'access_contracts',
        'password',
        'access_key',
        'status',
        'access_orders',
        'access_clients',
        'access_staff',
        'access_providers',
        'access_warehouse',
        'access_supply',
        'access_services',
        'role',
        'style',
        'menu',
        'avatar',
        'config',
        'date',
        'access_orders_all',
        'access_files',
        'access_fittings',
        'access_tfmf',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'add_ts',
    ];
}

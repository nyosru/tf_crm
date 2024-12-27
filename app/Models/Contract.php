<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    // Указываем таблицу
    protected $table = 'contracts';

    // Указываем поля, которые могут быть массово заполняемыми
    protected $fillable = [
        'contract_templates_id',
        'add_ts',
        'client_id',
        'comment',
        'signed',
        'signed_file',
        'uid',
        'signed_date',
        'order_id',
        'order_original',
        'date',
    ];

    // Указываем, что поле add_ts — это timestamp
    protected $dates = ['add_ts'];

    // Типы данных для кастинга
    protected $casts = [
        'signed' => 'string', // 'yes' или 'no'
        'date' => 'integer',  // дата как целое число
    ];

    // Отношения
    public function contractTemplate()
    {
        return $this->belongsTo(ContractTemplate::class, 'contract_templates_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }


    // Связь "Один к одному" с моделью Order
    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_original');
    }

}

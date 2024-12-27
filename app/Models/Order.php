<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'name',
        'order_form_data',
        'form_data',
        'form_id',
        'form_type',
        'manager_id',
        'in_archive',
        'last_log_id',
        'price',
        'price_without_decor',
        'price_stone_countertop',
        'ready_dates',
        'last_roles_log_id',
        'last_change_staff_id',
        'last_change_ts',
        'contract_id',
        'urgently',
        'group_id',
        'brigade_id',
        'types',
        'type_payments',
        'type_payments_month',
        'forms_payment',
        'discount',
        'adres',
        'labels',
        'design',
        'success_payment',
        'comment_akcia',
        'production_time',
        'guarantee_period',
        'order_schedule',
        'order_tfmf',
        'summa_work',
        'summa_install',
        'summa_dop',
        'summa_dop2',
        'payment_dop',
        'comment_dop',
        'virtual_order_id',
        'virtual_service_id',
        'service',
        'usluga',
        'summa_mebel',
        'summa_build',
        'summa_zamer',
        'summa_dost',
        'summa_gruz',
        'summa_tech',
        'summa_manager'
    ];

    protected $casts = [
        'ready_dates' => 'array',
        'last_change_ts' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $appends = ['viruchka'];
    public function getViruchkaAttribute()
    {
        return $this->price -

            $this->summa_work -
            $this->design -
        $this->summa_install +
        $this->summa_dop +
        $this->summa_dop2 -
         $this->summa_mebel -
        $this->summa_build -
        $this->summa_zamer -
        $this->summa_dost -
        $this->summa_gruz -
        $this->summa_tech -
        $this->summa_manager
            ;

//        return 'the translated tag';
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
//
//    public function manager()
//    {
//        return $this->belongsTo(User::class, 'manager_id'); // Предполагаем, что менеджеры - это пользователи
//    }
//
//    public function form()
//    {
//        return $this->belongsTo(Form::class); // Предполагая, что есть модель Form
//    }
//
//    public function brigade()
//    {
//        return $this->belongsTo(Brigade::class); // Предполагая, что есть модель Brigade
//    }
//
//    public function contract()
//    {
//        return $this->belongsTo(Contract::class); // Предполагая, что есть модель Contract
//    }
    // Обратная связь "Один к одному" с моделью Contract
    public function contract()
    {
        return $this->belongsTo(Contract::class, 'id', 'order_original');
    }
}

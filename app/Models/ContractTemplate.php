<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractTemplate extends Model
{
    use HasFactory;

    // Указываем таблицу
    protected $table = 'contracts_templates';

    // Указываем поля, которые могут быть массово заполняемыми
    protected $fillable = [
        'file',
        'in_archive',
        'add_ts',
        'name',
        'text',
    ];

    // Указываем, что поле add_ts — это timestamp
    protected $dates = ['add_ts'];

    // Типы данных для кастинга
    protected $casts = [
        'in_archive' => 'string', // Преобразуем 'yes' или 'no' в строку
    ];

    // Если нужно, добавьте дополнительные методы для работы с моделью
    // Например, для вывода имени контракта или текстового представления

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvidersMaterials extends Model
{
    // Указываем имя таблицы, так как оно отличается от стандартного именования Laravel
    protected $table = 'providers_materials';

    // Указываем первичный ключ, так как он тоже отличается от стандартного имени
    protected $primaryKey = 'id';

    // Массив полей, которые могут быть массово присвоены
    protected $fillable = [
        'name',
        'provider_id',
        'category_name',
        'hash',
        'in_archive',
        'price',
        'price_usd',
        'is_used',
        'warehouse',
        'unit',
        'comment',
        'volume',
        'articul',
        'size',
        'edc',
        'note',
        'original_name'
    ];

    /**
     * Связь с моделью Provider (если у вас есть такая)
     */
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    /**
     * Любые другие необходимые связи с другими моделями
     */
}

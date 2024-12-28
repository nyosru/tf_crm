<?php

//use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Schema;
//
//return new class extends Migration
//{
//    /**
//     * Run the migrations.
//     */
//    public function up(): void
//    {
//
//        Schema::table('clients', function (Blueprint $table) {
//            // Изменяем тип поля на дату с возможностью хранения NULL
//            $table->date('date_passport')->nullable()->change();
//        });
//
////        //
////
////        // Сначала удаляем все записи с датой '0000-00-00'
////        DB::table('clients')->where('date_passport', '=','0000-00-00')->update(['date_passport' => '1900-01-01']);
////
////        Schema::table('clients', function (Blueprint $table) {
////            $table->date('date_passport')->nullable(true)->change();
////        });
////
////        DB::table('clients')->where('date_passport', '1900-01-01')->update(['date_passport' => null]);
//////        DB::table('clients')->where('date_passport', '0000-00-00')->update(['date_passport' => null]);
//    }
//
//    /**
//     * Reverse the migrations.
//     */
//    public function down(): void
//    {
//        Schema::table('clients', function (Blueprint $table) {
//            $table->date('date_passport')->nullable(false)->change();
//        });
//    }
//};

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

//class ChangeDatePassportFieldInClientsTable extends Migration
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Проверяем наличие строк с недопустимыми значениями
        if ($this->hasInvalidDates()) {
            // Создаем временную таблицу
            DB::statement("CREATE TABLE temp_clients LIKE clients");
            DB::statement("ALTER TABLE temp_clients DROP COLUMN date_passport");

            // Переносим корректные данные в временную таблицу
            DB::statement("INSERT INTO temp_clients SELECT * FROM clients WHERE date_passport <> '0000-00-00'");

            // Очищаем таблицу клиентов от строк с недопустимыми значениями
            DB::statement("DELETE FROM clients WHERE date_passport = '0000-00-00'");
        }

        // Добавляем новый столбец с типом DATE и разрешением хранения NULL
        Schema::table('clients', function (Blueprint $table) {
            $table->date('date_passport')->nullable()->after('column_before'); // Замените 'column_before' на название столбца, после которого хотите добавить 'date_passport'
        });

        // Если были строки с недопустимыми значениями, восстанавливаем данные из временной таблицы
        if ($this->hasInvalidDates()) {
            // Восстанавливаем данные из временной таблицы
            DB::statement("UPDATE clients c JOIN temp_clients tc ON c.id = tc.id SET c.date_passport = tc.date_passport");

            // Удаляем временную таблицу
            DB::statement("DROP TABLE temp_clients");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('date_passport');
        });
    }

    /**
     * Проверяет наличие строк с недопустимыми значениями '0000-00-00'.
     *
     * @return bool
     */
    private function hasInvalidDates(): bool
    {
        return DB::table('clients')
                ->where('date_passport', '=', '0000-00-00')
                ->count() > 0;
    }
};

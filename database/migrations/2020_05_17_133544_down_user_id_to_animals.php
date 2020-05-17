<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DownUserIdToAnimals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            // 刪除外鍵約束 （這個表名_外鍵名_foreign）
            $table->dropForeign('animals_user_id_foreign');

            //刪除user_id 欄位
            $table->dropColumn('user_id');
        });
    }
}

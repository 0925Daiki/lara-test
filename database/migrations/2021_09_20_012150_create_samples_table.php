<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->string('tweet');
            $table->string('title');
            $table->timestamps();
            // created_at,updated_at = 作成した日付・更新した日付

            // Laravelでテーブルを作る際の全体像
            // 1.マイグレーションファイルを作成
            // 2.カラムを定義する
            // 3.コマンドを打つ php artisan migrate
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samples');
    }
}

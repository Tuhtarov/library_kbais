<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterTablePostsCurrentTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            DB::statement('ALTER TABLE `books`
                CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
                CHANGE `updated_at` `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            DB::statement('ALTER TABLE `books`
                CHANGE `created_at` `created_at` TIMESTAMP NULL,
                CHANGE `updated_at` `updated_at` TIMESTAMP NULL');
        });
    }
}

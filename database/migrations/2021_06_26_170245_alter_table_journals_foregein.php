<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableJournalsForegein extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('journals', function (Blueprint $table) {
            $table->foreign('reader_id')
                ->references('id')
                ->on('readers')
                ->onDelete('set null');

            $table->foreign('book_id')
                ->references('id')
                ->on('books')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('journals', function (Blueprint $table) {
            $table->dropForeign(['reader_id']);
            $table->dropForeign(['book_id']);
        });
    }
}

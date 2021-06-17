<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_readings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reader_id');
            $table->foreignId('book_id');
            $table->timestamp('added_at');
            $table->date('when_return');
            $table->boolean('returned');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journal_readings');
    }
}

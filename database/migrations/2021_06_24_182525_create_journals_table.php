<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('reader_id')->nullable();
            $table->unsignedInteger('book_id')->nullable();
            $table->timestamp('added_at');
            $table->date('when_return');
            $table->boolean('returned')->default(0);

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
        Schema::dropIfExists('journals');
    }
}

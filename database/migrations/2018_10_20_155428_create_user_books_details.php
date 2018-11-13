<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBooksDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userBooksDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('book_id');
            $table->string('isbn_no');
            $table->string('publishing_year');
            $table->string('publisher');
            $table->string('summery');
            $table->string('condition');
            $table->string('description');
            $table->string('why_from_me');
            $table->string('status');
            $table->string('is_delete');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userBooksDetails');
    }
}

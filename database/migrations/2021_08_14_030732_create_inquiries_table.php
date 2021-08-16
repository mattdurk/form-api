<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid');
            $table->integer('category_id');
            $table->string('fullname' , 155)->nullable(false);
            $table->string('furigana' , 155)->nullable(true);
            $table->integer('age');
            $table->string('gender' , 5)->nullable(true);
            $table->json('meta_data')->nullable(false);
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
        Schema::dropIfExists('inquiries');
    }
}

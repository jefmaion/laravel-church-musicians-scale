<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberInstrumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_instrument', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

 
            $table->unsignedBigInteger('member_id')->nullable();
            $table->unsignedBigInteger('instrument_id')->nullable();

            $table->integer('main_instrument')->nullable()->default(0);
            $table->string('comments', 1000)->nullable();
            $table->foreign('member_id')->references('id')->on('members');
            $table->foreign('instrument_id')->references('id')->on('instruments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_instrument');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelIdToMemberInstrumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member_instrument', function (Blueprint $table) {
            $table->unsignedBigInteger('level_id')->nullable()->after('instrument_id');
            $table->foreign('level_id')->references('id')->on('levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member_instrument', function (Blueprint $table) {
            $table->dropForeign(['level_id']);
            $table->dropColumn('store_id');
        });
    }
}

<?php

use App\Models\Instrument;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('enabled')->nullable()->default(1);

            $table->string('name', 200);
        });



        
        $data = ['Vocal', 'Bateria', 'Baixo', 'Guitarra', 'Teclado', 'Violão', 'Saxofone'];
        foreach($data as $item) {
            Instrument::create(['name' => $item]);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instruments');
    }
}

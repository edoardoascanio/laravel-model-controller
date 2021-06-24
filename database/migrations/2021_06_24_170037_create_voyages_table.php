<?php

use Faker\Provider\ar_JO\Text;
use Illuminate\Database\Console\Migrations\TableGuesser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->integer("id")->autoIncrement();
            $table->date("data_arrivo");
            $table->date("data_partenza");
            $table->integer("totale_notti")->default(1);
            $table->integer("persone")->default(1);
            $table->string("hotel", 50)->nullable();
            $table->longText("descrizione")->nullable();
            $table->integer("prezzo_totale")->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyages');
    }
}

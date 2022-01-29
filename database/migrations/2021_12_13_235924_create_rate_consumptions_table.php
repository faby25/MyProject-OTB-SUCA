<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateConsumptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_consumptions', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 100);
            $table->integer('cubos_ini');
            $table->integer('cubos_fin');
            $table->decimal('costo',8,2);
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
        Schema::dropIfExists('rate_consumptions');
    }
}

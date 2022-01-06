<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',150);
            $table->string('apellidos',255)->nullable();
            $table->dateTime('fechaactualizacion')->default(now());
            $table->string('sexo',2)->nullable();
            $table->date('fnac')->nullable();
            $table->string('direccion',255)->nullable();
            $table->string('poblacion',255)->default('MADRID');
            $table->string('provincia',255)->default('MADRID');
            $table->string('cp',5)->nullable()->default('28011');
            $table->string('dni',9)->nullable();
            $table->float('edad')->nullable();
            $table->string('telefono',9)->nullable();
            $table->string('movil',9)->nullable();
            $table->string('email',150)->nullable();
            $table->date('preno')->nullable();
            $table->string('aviso',2)->default('SI');
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
        Schema::dropIfExists('clientes');
    }
}

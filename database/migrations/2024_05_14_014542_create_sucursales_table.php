<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->string('gerente')->nullable();
            $table->tinyText('nombre')->nullable();
            $table->string('direccion')->nullable();
            $table->tinyText('num_tel')->nullable();
            $table->tinyText('horario_atencion')->nullable();
            $table->integer('num_empleado')->default(0)->nullable();
            $table->text('descripcion')->nullable();
            /*
            muestra si la sucursal está abierta, cerrada temporalmente,
            en proceso de apertura o cierre, entre otros estados posibles.
            */
            $table->tinyText('estado')->nullable();
            $table->tinyInteger('deleted')->default(0)->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('sucursales');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadDeSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_de_sucursales', function (Blueprint $table) {
            $table->id();
            $this->crear_campos($table);
            $table->timestamps();
        });
    }

    private function crear_campos(Blueprint $table)
    {
        // Make foreign key `sucursal_id`
        $table->foreignId('sucursal_id')
        ->nullable()
        ->constrained('sucursales', 'id')
        ->onUpdate('cascade')
        ->onDelete('cascade');

        $table->tinyText('no_empleado')->nullable();
        $table->tinyText('nombre_responsable')->nullable();
        $table->tinyText('correo_responsable')->nullable();
        $table->tinyText('tel_responsable')->nullable();
        $table->tinyText('actividad')->nullable();
        $table->string('detalles')->nullable();
        $table->tinyText('autorizado_por')->nullable();
        $table->date('fecha_inicio')->default(now())->nullable();
        $table->date('fecha_final')->default(now())->nullable();
        $table->tinyText('estado')->nullable();
        $table->tinyInteger('deleted')->default(0)->nullable();
        $table->timestamp('deleted_at')->nullable();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_de_sucursales');
    }
}

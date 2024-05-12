<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosAndInformacionDeEmpleadosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $this->campos_empleados($table);
            // Control
            $table->tinyInteger('deleted')->default(0)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        Schema::create('informacion_de_empleado', function (Blueprint $table) {
            $table->id();
            $this->campos_informacion_de_empleado($table);
            // Control
            $table->tinyInteger('deleted')->default(0)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    public function campos_empleados(Blueprint $table)
    {
        // Datos personales
        $table->string('nombres')->nullable();
        $table->string('apellidos')->nullable();
        $table->tinyText('sexo')->nullable();
        $table->tinyInteger('edad')->default(1)->nullable();
        $table->string('correo')->nullable();
        $table->string('rfc')->nullable();
        $table->string('domicilio')->nullable();
        $table->text('foto_img')->nullable();
    }

    public function campos_informacion_de_empleado(Blueprint $table)
    {
        // Make foreign key for `empleado_id`
        $table->foreignId('empleado_id')
        ->nullable()
        ->references('id')
        ->on('empleados')
        ->constrained()
        ->onUpdate('cascade')
        ->onDelete('cascade');

        // Datos del colaborador
        $table->tinyText('no_control')->nullable();
        $table->tinyText('tipo')->nullable(); // Externo o Interno
        $table->tinyText('razon_social')->nullable(); // Física o Moral
        $table->tinyText('dias_de_trabajo')->nullable();
        $table->tinyText('horario')->nullable();
        $table->text('firma_img')->nullable();
        $table->tinyText('puesto')->nullable();
        $table->string('puesto_descripcion')->nullable();
        $table->tinyText('rol')->nullable();
        $table->tinyText('rango')->nullable();
        $table->tinyText('duracion')->nullable();
        $table->decimal('salario', 22, 2)->default(0.0)->nullable();
        $table->tinyText('salario_texto')->nullable();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
        Schema::dropIfExists('informacion_de_empleado');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas', function (Blueprint $table) {
            $table->integer("diaH");
            $table->integer("horaH");
            $table->unsignedBigInteger("codigoAs");
            
            // El codigo de la asignatura también es clave primaria porque
            // no entonces dos usuarios distintos no podrían tener el mismo dia y hora
            
            $table->primary(["diaH", "horaH", "codigoAs"]);
            $table->foreign("codigoAs")->references("codAs")->on("asignaturas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horas');
    }
};

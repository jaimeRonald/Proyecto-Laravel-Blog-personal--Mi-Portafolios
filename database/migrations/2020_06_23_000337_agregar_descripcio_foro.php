<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarDescripcioForo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Foros', function (Blueprint $table) {

            $table->string('ruta_imagenes');
            // de una anterior migracion
            //$table->string('descripcion');
            //$table->string('rutafoto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Foros', function (Blueprint $table) {
        $table->dropColumn('ruta_imagenes');
        });
    }
}

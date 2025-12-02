<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {

            if (!Schema::hasColumn('reports', 'latitud')) {
                $table->decimal('latitud', 10, 7)->nullable();
            }

            if (!Schema::hasColumn('reports', 'longitud')) {
                $table->decimal('longitud', 10, 7)->nullable();
            }

            // foto ya existe, no la agregamos
            // if (!Schema::hasColumn('reports', 'foto')) {
            //     $table->string('foto')->nullable();
            // }

            if (!Schema::hasColumn('reports', 'ia_resultado')) {
                $table->json('ia_resultado')->nullable();
            }

        });
    }

    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn(['latitud', 'longitud', 'ia_resultado']);
        });
    }
};
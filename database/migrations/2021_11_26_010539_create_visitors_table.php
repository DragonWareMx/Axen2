<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',100);
            $table->string('email',45)->unique();
            $table->string('telefono',15)->nullable();
            $table->string('referencia')->nullable();
            $table->boolean('curso_solvencia')->default(false);
            $table->boolean('dinero_espiritual')->default(false);
            $table->boolean('avatar')->default(false);
            $table->boolean('avatrading')->default(false);
            $table->boolean('boletin_info')->default(true);
            $table->string('sucursal',100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}

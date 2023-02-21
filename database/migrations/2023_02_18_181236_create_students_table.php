<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->string('name');
            $table->integer('age');
            $table->timestamps();
        });

        DB::table('students')->insert([
            'name' => 'Fulano de Tal',
            'age' => 4,
            'company_id' => 1,
        ]);
        DB::table('students')->insert([
            'name' => 'Ciclano de',
            'age' => 6,
            'company_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_clients', function (Blueprint $table) {
            $table->bigIncrements('client_id');
            $table->string('client_name');
            $table->string('avatar_path');
            $table->string('nr_rg');
            $table->string('nr_cpf');
            $table->string('tx_email');
            $table->string('tx_phone');
            $table->string('tx_street');
            $table->string('tx_city');
            $table->string('tx_zip_code');
            $table->string('tx_state');
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
        Schema::dropIfExists('tb_clients');
    }
}

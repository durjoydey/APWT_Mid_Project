<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myorders', function (Blueprint $table) {
            $table->id();

            $table->string('O_id',50);

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('systemusers');

            $table->string('U_username',50);

            $table->string('P_tprice',50);

            $table->string('Paymenttype',50);

            $table->string('O_status',150);

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
        Schema::dropIfExists('myorders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOffersTable extends Migration
{

    public function up()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::table('payouts', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}

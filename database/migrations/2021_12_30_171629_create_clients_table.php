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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name',75);
            $table->float('due')->default(0);
            $table->text('comments');
            /*
            $table->string('name',255)->default('');
            $table->string('username',150)->default('');
            $table->string('email',100)->default('');
            $table->string('password',100)->default('');
            $table->string('usertype',25)->default('');
            $table->tinyInteger('block',4)->default(0);;
            $table->tinyInteger('sendEmail',4)->nullable()->default(0);
            $table->dateTime('registerDate');
            $table->dateTime('lastvisitDate');
            $table->string('activation',100)->default('');
            $table->text('params',255);
            $table->dateTime('lastResetTime');
            $table->integer('resetCount', 11);*/
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
        Schema::dropIfExists('clients');
    }
}

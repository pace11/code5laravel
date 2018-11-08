<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_reg',13);
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('phone',12);
            $table->string('type_ta',30)->nullable();
            $table->text('desc_ta')->nullable();
            $table->text('desc_method')->nullable();
            $table->string('organization',100)->nullable();
            $table->text('desc_apps')->nullable();
            $table->string('school',100)->nullable();
            $table->string('campus',100)->nullable();
            $table->string('nim',30)->nullable();
            $table->timestamp('date_in');
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
        Schema::dropIfExists('registration');
    }
}

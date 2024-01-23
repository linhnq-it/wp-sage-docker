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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('Kind')->nullable();
            $table->integer('SClassID');
            $table->string('Name_E', 50);
            $table->string('Found_date', 20)->nullable();
            $table->integer('Capacity')->nullable();
            $table->string('Flag', 255)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('URL', 80)->nullable();
            $table->string('GuestPoloShirt', 50)->nullable();
            $table->string('HomePoloShirt', 50)->nullable();
            $table->timestamp('ModifyTime')->nullable();
            $table->text('introduceEn')->nullable();
            $table->string('AreaEn', 30)->nullable();
            $table->string('GymnasiumEn', 50)->nullable();
            $table->integer('VenuesID')->nullable();
            $table->tinyInteger('Conference')->nullable();
            $table->integer('isNational')->nullable();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};

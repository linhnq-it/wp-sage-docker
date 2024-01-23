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
        Schema::create('sclass', function (Blueprint $table) {
            $table->id();
            $table->string('Color', 7);
            $table->string('Name_E', 50);
            $table->string('Name_ES', 30);
            $table->string('Name_S', 5)->nullable();
            $table->smallInteger('Kind')->nullable();
            $table->smallInteger('Mode')->nullable();
            $table->smallInteger('count_round')->nullable();
            $table->smallInteger('curr_round')->nullable();
            $table->string('Curr_matchSeason', 10)->nullable();
            $table->string('Sclass_pic', 255)->nullable();
            $table->tinyInteger('ifstop')->nullable();
            $table->tinyInteger('Sclass_type')->nullable();
            $table->smallInteger('count_group')->nullable();
            $table->tinyInteger('Bf_simply_disp')->nullable();
            $table->smallInteger('sclass_sequence')->nullable();
            $table->smallInteger('InfoID')->nullable();
            $table->tinyInteger('Bf_IfDisp')->nullable();
            $table->timestamp('ModifyTime')->nullable();
            $table->string('BeginSeason', 9)->nullable();
            $table->integer('subSclassID')->nullable();
            $table->integer('ifHaveSub')->nullable();
            $table->integer('ifSort')->nullable();
            $table->integer('ifHavePaper')->nullable();
            $table->integer('ifShowScore')->nullable();
            $table->string('rank_matchSeason', 10)->nullable();
            // $table->timestamps();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sclass');
    }
};

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
        Schema::create('schedule_results', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id');
            $table->integer('SclassID')->comment('The league or cup ID');
            $table->string('MatchSeason', 10)->nullable()->comment('Season, e.g. 2019-2020, 2020');
            $table->smallInteger('round')->comment('League round or cup stage, e.g. 10')->nullable();
            $table->integer('HomeTeamID')->nullable();
            $table->integer('GuestTeamID')->nullable();
            $table->integer('Neutrality')->comment('Is it a neutral venue?')->nullable();
            $table->timestamp('MatchTime')->comment('Start time of the match');
            $table->timestamp('MatchTime2')->comment('Start time of the second half');
            $table->smallInteger('MatchState')->comment('Match status: 0: Not started; -1: Finished')->nullable();
            $table->smallInteger('WeatherIcon')->nullable();
            $table->string('Temperature', 10)->nullable()->comment('e.g. 14℃～15℃');
            $table->string('TV', 100)->nullable()->comment('Please ignore it');
            $table->string('Umpire', 50)->nullable()->comment('Please ignore it');
            $table->integer('Visitor')->default(1)->comment('Is there lineup data for the match? 1: true')->nullable();
            $table->smallInteger('HomeScore')->nullable();
            $table->smallInteger('GuestScore')->nullable();
            $table->smallInteger('HomeHalfScore')->nullable();
            $table->smallInteger('GuestHalfScore')->nullable();
            $table->smallInteger('Home_Red')->nullable();
            $table->smallInteger('Guest_Red')->nullable();
            $table->smallInteger('Home_Yellow')->nullable();
            $table->smallInteger('Guest_Yellow')->nullable();
            $table->timestamp('bf_changetime')->nullable();
            $table->tinyInteger('shangpan')->nullable();
            $table->string('grouping2', 1)->nullable()->comment('Group Name, e.g. A');
            $table->text('Explain_en')->nullable()->comment('Special case description of the match, e.g. Match end up with [0-3], due to (Torpedo-MAZ Minsk) withdraw from the match');
            $table->integer('bfShow')->nullable();
            $table->integer('subSclassID')->nullable();
            $table->string('Explainlist', 100)->nullable();
            $table->string('Home_OrderEn', 15)->nullable();
            $table->string('Guest_OrderEn', 15)->nullable();
            $table->integer('VenuesID')->nullable();
            $table->integer('isGuessRed')->nullable();
            $table->integer('isLive')->nullable();
            $table->tinyInteger('homeCorner')->nullable();
            $table->tinyInteger('homeCornerHalf')->nullable();
            $table->tinyInteger('guestCorner')->nullable();
            $table->tinyInteger('guestCornerHalf')->nullable();
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
        Schema::dropIfExists('schedule_results');
    }
};

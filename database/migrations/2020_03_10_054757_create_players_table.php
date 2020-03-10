<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('code')->unique();

            $table->string('first_name');
            $table->string('second_name');
            
            $table->unsignedInteger('chance_of_playing_next_round')->default(0);
            $table->unsignedInteger('chance_of_playing_this_round')->default(0);
            $table->unsignedInteger('cost_change_event')->default(0);
            $table->unsignedInteger('cost_change_fall')->default(0);
            $table->unsignedInteger('cost_change_start')->default(0);
            $table->unsignedInteger('cost_change_start_fall')->default(0);
            $table->unsignedInteger('dreamteam_count')->default(0);
            $table->unsignedInteger('element_type');
            $table->unsignedInteger('event_points')->default(0);
            $table->unsignedInteger('now_cost');
            $table->unsignedInteger('team');
            $table->unsignedInteger('team_code');
            $table->unsignedInteger('total_points');
            $table->unsignedInteger('transfers_in');
            $table->unsignedInteger('transfers_in_evnet');
            $table->unsignedInteger('transfers_out');
            $table->unsignedInteger('transfers_out_event');
            $table->unsignedInteger('minutes');
            $table->unsignedInteger('goals_scored')->default(0);
            $table->unsignedInteger('assists')->default(0);
            $table->unsignedInteger('clean_sheets')->default(0);
            $table->unsignedInteger('goals_conceded')->default(0);
            $table->unsignedInteger('own_goals')->default(0);
            $table->unsignedInteger('penalties_saved')->default(0);
            $table->unsignedInteger('penalties_missed')->default(0);
            $table->unsignedInteger('yellow_cards')->default(0);
            $table->unsignedInteger('red_cards')->default(0);
            $table->unsignedInteger('saves')->default(0);
            $table->unsignedInteger('bps')->default(0);
            $table->unsignedDecimal('influence', 5, 1)->default(0);
            $table->unsignedDecimal('creativity', 5, 1)->default(0);
            $table->unsignedDecimal('ict_index', 5, 1)->default(0);
            $table->unsignedDecimal('ep_next', 2, 1);
            $table->unsignedDecimal('ep_this', 2, 1);
            $table->unsignedDecimal('form', 2, 1);
            $table->unsignedDecimal('points_per_game', 2, 1);
            $table->unsignedDecimal('selected_by_percent', 2, 1);
            $table->unsignedDecimal('value_form', 2, 1);
            $table->unsignedDecimal('value_season', 2, 1);

            
            $table->boolean('in_dreamteam')->default(false);
            $table->boolean('special')->default(false);

            
            $table->string('news');
            $table->string('photo');
            $table->string('squad_number')->nullable();
            $table->string('status');
            $table->string('web_name');


            $table->datetime('news_added');

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
        Schema::dropIfExists('players');
    }
}

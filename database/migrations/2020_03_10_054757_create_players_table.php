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
            
            $table->integer('chance_of_playing_next_round')->nullable();
            $table->integer('chance_of_playing_this_round')->nullable();
            $table->integer('cost_change_event')->nullable();
            $table->integer('cost_change_event_fall')->nullable();
            $table->integer('cost_change_start')->nullable();
            $table->integer('cost_change_start_fall')->nullable();
            $table->integer('dreamteam_count')->nullable();
            $table->integer('element_type');
            $table->integer('event_points')->nullable();
            $table->integer('now_cost');
            $table->integer('team');
            $table->integer('team_code');
            $table->integer('total_points');
            $table->integer('transfers_in');
            $table->integer('transfers_in_event');
            $table->integer('transfers_out');
            $table->integer('transfers_out_event');
            $table->integer('minutes');
            $table->integer('bonus');
            $table->integer('goals_scored')->nullable();
            $table->integer('assists')->nullable();
            $table->integer('clean_sheets')->nullable();
            $table->integer('goals_conceded')->nullable();
            $table->integer('own_goals')->nullable();
            $table->integer('penalties_saved')->nullable();
            $table->integer('penalties_missed')->nullable();
            $table->integer('yellow_cards')->nullable();
            $table->integer('red_cards')->nullable();
            $table->integer('saves')->nullable();
            $table->integer('bps')->nullable();
            $table->decimal('threat', 5, 1);
            $table->decimal('influence', 5, 1)->nullable();
            $table->decimal('creativity', 5, 1)->nullable();
            $table->decimal('ict_index', 5, 1)->nullable();
            $table->decimal('ep_next', 5, 1);
            $table->decimal('ep_this', 5, 1);
            $table->decimal('form', 5, 1);
            $table->decimal('points_per_game', 5, 1);
            $table->decimal('selected_by_percent', 5, 1);
            $table->decimal('value_form', 5, 1);
            $table->decimal('value_season', 5, 1);

            
            $table->boolean('in_dreamteam')->default(false);
            $table->boolean('special')->default(false);

            
            $table->string('news');
            $table->string('photo')->nullable();
            $table->string('squad_number')->nullable();
            $table->string('status');
            $table->string('web_name');
            $table->string('news_added')->nullable();

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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'players';
    protected $fillable = [
        'code', 'chance_of_playing_next_round',
        'chance_of_playing_this_round',
        'cost_change_event',
        'cost_change_event_fall',
        'cost_change_start',
        'cost_change_start_fall',
        'dreamteam_count',
        'element_type',
        'ep_next', 'ep_this',
        'event_points', 'first_name',
        'form', 'in_dreamteam', 'news',
        'news_added', 'now_cost',
        'photo', 'points_per_game', 'second_name',
        'selected_by_percent', 'special', 'squad_number',
        'status', 'team', 'team_code', 'total_points',
        'transfers_in', 'transfers_in_event', 'transfers_out',
        'transfers_out_event', 'value_form', 'value_season',
        'web_name', 'minutes', 'goals_scored', 'assists',
        'clean_sheets', 'goals_conceded', 'own_goals',
        'penalties_saved', 'penalties_missed', 'yellow_cards',
        'red_cards', 'saves', 'bonus', 'bps', 'influence',
        'creativity', 'threat', 'ict_index'
    ];
    protected $appends = [
        'full_name'
    ];
    protected $casts = [
        'in_dreamteam' => 'boolean',
        'special' => 'boolean',
    ];

    public function getFullNameAttribute() {
        return "{$this->first_name} {$this->second_name}";
    }

    
}

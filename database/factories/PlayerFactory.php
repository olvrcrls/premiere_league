<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Player::class, function (Faker $faker) {
    return [
        'code' => rand(1000,5000),
        'first_name' => $faker->firstName,
        'second_name' => $faker->lastName,
        'chance_of_playing_next_round' => rand(1, 100),
        'chance_of_playing_this_round' => rand(1, 100),
        'cost_change_event' => rand(1, 100),
        'cost_change_event_fall' => rand(1, 100),
        'dreamteam_count' => rand(1, 100),
        'element_type' => rand(1, 100),
        'event_points' => rand(1, 10),
        'now_cost' => rand(1, 100),
        'team' => rand(1, 100),
        'team_code' => rand(1000, 9000),
        'total_points' => rand(1, 10),
        'transfers_in' => rand(1, 100),
        'transfers_in_event' => rand(1, 100),
        'transfers_out' => rand(1, 100),
        'transfers_out_event' => rand(1, 100),
        'minutes' => rand(1, 500),
        'bonus' => rand(1, 100),
        'goals_scored' => rand(1, 100),
        'assists' => rand(1, 100),
        'clean_sheets' => rand(1, 100),
        'goals_conceded' => rand(1, 100),
        'own_goals' => rand(1, 100),
        'penalties_saved' => rand(1, 100),
        'penalties_missed' => rand(1, 100),
        'yellow_cards' => rand(1, 20),
        'red_cards' => rand(1, 10),
        'saves' => rand(1, 100),
        'bps' => rand(1, 100),
        'threat' => rand(1, 100),
        'influence' => rand(1, 100),
        'creativity' => rand(1, 100),
        'ict_index' => rand(1, 100),
        'ep_next' => rand(1, 100),
        'ep_this' => rand(1, 100),
        'form' => rand(1, 100),
        'points_per_game' => rand(1, 100),
        'in_dreamteam' => rand(0, 1),
        'special' => rand(0, 1),
        'news' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'photo' => null,
        'squad_number' => null,
        'status' => 'a',
        'web_name' => $faker->firstName,
        'news_added' => $faker->dateTime,
        'selected_by_percent' => rand(1, 100),
        'value_form' => rand(1, 100),
        'value_season' => rand(1, 100)
    ];
});

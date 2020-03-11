<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Player;

class PlayerTest extends TestCase
{

    // use RefreshDatabase;
    
    /** @test */
    public function can_create_a_player_data() {
        $this->post(route('player.store'), $attributes = factory(Player::class)->raw())
            ->assertSee($attributes['code'])
            ->assertSee($attributes['first_name'])
            ->assertSee($attributes['second_name']);
    }

    /** @test */
    public function fetch_all_player_data() {
        $response = $this->get(route('player.index'));
        $response->assertStatus(200);
    }

    /** @test */
    public function fetch_single_player_data() {
        $this->can_create_a_player_data();
        $player = Player::first();
        $response = $this->get(route('player.show', compact('player')));
        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

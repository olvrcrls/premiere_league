<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\PlayerImporter;
use App\Repositories\PlayerRepository;
use App\Models\Player;

class PlayerController extends Controller
{
	protected $player;

	public function __construct(Player $player) {
		$this->player = new PlayerRepository($player);
	}

	public function index() {
		return $this->player->all();
	}

	public function show($id) {
		return $this->player->show($id);
	}
}

<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Player;
use App\Repositories\PlayerRepository;

class PlayerImporter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $player;
    protected $apiUrl;
    protected $options;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($apiUrl, $options)
    {
        $this->apiUrl = $apiUrl ? config('api.base_url') . $apiUrl : config('api.base_url') . "bootstrap-static/";
        $this->options = $options ?:  [
            'http' => [
                'method' => 'GET',
                'header' => 'Content-Type: application/json' 
            ]
        ];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Player $player)
    {
		try {
            $this->player = new PlayerRepository($player);
			$response = \file_get_contents($this->apiUrl, false, stream_context_create($this->options));
            $data = get_object_vars(json_decode($data));
            if ($data) {
                $players = $data['elements'];
                $this->storePlayers($players);
                echo "Successfully imported players data.\n";
            } else {
                echo "The GET endpoint has empty records.\n";
            }
			echo 'ok';
		} catch (Exception $e) {
            error_log($e->getMessage());
			echo $e->getMessage();
		}
    }

    public function storePlayers($data) {
        foreach ($data as $player) {
            $p = get_object_vars($player);
            $this->player->store($p);
        }
    }
}

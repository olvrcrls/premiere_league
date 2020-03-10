<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class PlayerImporter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $apiUrl;
    protected $apiUrlClient;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->apiUrl = "https://fantasy.premierleague.com/api/bootstrap-static/";
        $this->apiClient = new Client();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $response = $this->apiClient->request($this->apiUrl);
            if ($response->getStatusCode() === "200") {
                
            } else {
                echo "Can not connect to server";
            }
        } catch (Exception $e) {

        }

    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Games\RockPaperScissor\Game;

class RockPaperScissors extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play:rock-paper-scissor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Play the game of Rock-Paper-Scissors';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $rounds = 100;
        $game = new Game($rounds);

        $game->gameOn();
        $results = $game->showResults();

        echo $results;
    }
}

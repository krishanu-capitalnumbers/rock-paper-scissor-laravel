<?php
namespace App\Games\RockPaperScissor;

use App\Games\RockPaperScissor\Gamer;
use App\Games\RockPaperScissor\Result;

class Game {

    /**
     * Gamer one object
     *
     * @var Gamer
     */
    private $gamerOne;

    /**
     * Gamer two object
     *
     * @var Gamer
     */
    private $gamerTwo;

    /**
     * Result object
     *
     * @var Result
     */
    private $result;

    /**
     * Number of rounds tobe played
     *
     * @var integer
     */
    private $rounds;

    /**
     * Create a new class instance
     *
     * @param integer $rounds
     * @return void
     */
    public function __construct($rounds = 100) 
    {
        $this->result = new Result();
        $this->rounds = $rounds;
        $this->setGamers();
    }

    /**
     * Set gamers for the game
     *
     * @return void
     */
    public function setGamers()
    {
        $this->gamerOne = new Gamer();
        $this->gamerTwo = new Gamer();
    }

    /**
     * Play the game
     *
     * @return void
     */
    public function gameOn() 
    {
        for ($i = 0; $i < $this->rounds; $i++) {
            $selectedOne = $this->gamerOne->select(true);
            $selectedTwo = $this->gamerTwo->select();

            $result = $this->result->evaluate($selectedOne, $selectedTwo);

            $this->result->set($result);
        }
    }
    
    /**
     * Show the results of the played games
     *
     * @return void
     */
    public function showResults()
    {
        return $this->result->get();
    }
}
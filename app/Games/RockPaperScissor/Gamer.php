<?php

namespace App\Games\RockPaperScissor;

class Gamer {

    /**
     * Game options to choose from
     *
     * @var Array
     */
    private $options;

    /**
     * Default option for the game
     *
     * @var String
     */
    private $defaultOption;

    /**
     * Create a new class instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->setOptions();
    }

    /**
     * Set options for the game tobe played
     *
     * @return void
     */
    private function setOptions()
    {
        $this->defaultOption = 'rock';
        $this->options = ['rock', 'paper', 'scissors'];
    }

    /**
     * Shuffle the options for the gamer
     *
     * @return void
     */
    private function shuffleOptions()
    {
        $key = array_rand($this->options);
        return $this->options[$key];
    }

    /**
     * Select an option for the gamer
     *
     * @param boolean $default
     * @return void
     */
    public function select(bool $default = false)
    {
        return (!$default) ? $this->shuffleOptions() : $this->defaultOption;  
    }    
}
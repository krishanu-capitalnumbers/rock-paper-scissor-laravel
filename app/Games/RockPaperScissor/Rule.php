<?php

namespace App\Games\RockPaperScissor;

class Rule {

    public $rules;

    /**
     * Create a new class instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->setRules();
    }

    /**
     * Set the rules for the game
     *
     * @return void
     */
    private function setRules()
    {
        $this->rules = [
            'rock' => [
               'beats' => [
                  'scissors',
               ], 
               'losesTo' => [
                  'paper',
               ] 
            ], 
            'paper' => [
               'beats' => [
                  'rock',
               ], 
               'losesTo' => [
                  'scissors',
               ] 
            ], 
            'scissors' => [
               'beats' => [
                  'paper',
               ], 
               'losesTo' => [
                  'rock',
               ] 
            ] 
        ];
    }
}
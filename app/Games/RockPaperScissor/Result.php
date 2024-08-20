<?php

namespace App\Games\RockPaperScissor;

use App\Games\RockPaperScissor\Rule;

class Result {

    /**
     * List of rules
     *
     * @var Array
     */
    private $rules;

    /**
     * Store results
     *
     * @var Array
     */
    private $results;

    /**
     * Create a new class instance
     * 
     * @return void
     */
    public function __construct()
    {
        $rule = new Rule();
        $this->rules = $rule->rules;
        $this->results = [
            'draw' => 0,
            'gamerOne' => 0,
            'gamerTwo' => 0
        ];
    }

    /**
     * Evaluate result based on inputs of both player
     *
     * @param String $selectedOne
     * @param String $selectedTwo
     * @return String
     */
    public function evaluate(String $selectedOne, String $selectedTwo) 
    {
        if ($selectedOne === $selectedTwo) {
            return 'draw';
        } else {
            $rule = $this->rules[$selectedOne];

            if (in_array($selectedTwo, $rule['beats'])) {
                return 'gamerOne';
            } elseif (in_array($selectedTwo, $rule['losesTo'])) {
                return 'gamerTwo';
            }
        }
    }

    /**
     * Set evaluated results
     *
     * @param String $result
     * @return void
     */
    public function set(String $result)
    {
        $this->results[$result] += 1;
    }

    /**
     * Get results in as a text output
     *
     * @return String
     */
    public function get() 
    {
        return "Total wins for Gamer One: " . $this->results['gamerOne']
         . PHP_EOL
         . "Total wins for Gamer Two: " . $this->results['gamerTwo']
         . PHP_EOL
         . "Total draws: " . $this->results['draw']
         . PHP_EOL;
    }
}
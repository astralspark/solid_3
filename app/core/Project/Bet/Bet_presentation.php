<?php

namespace Project\Bet;

class Bet_presentation extends \Project\Model{
	
	/**
	 *
	 * @var int Default tipster id
	 */
	private $tipster_id = 0;
	
	
	
	
	/**
	 * Create a new bet presentation instance
	 * @param int $tipster_id Default tipster id for methods calls
	 * @return void
	 */
	function __construct( int $tipster_id = 0 ){
		
		if( $tipster_id > 0 ){
			$this->tipster_id = $tipster_id;
		}
		
	}
	
	
	/**
	 * Get all active bets
	 * @param int $tipster_id Custom tipster id
	 * @return array Bets grouped by bet id
	 */
	function get_active_bets( int $tipster_id = 0 ) : array {
		$tipster_id = $this->get_tipster_id( $tipster_id );
		
		
		/*
		 * Get all tips
		 */
		
		'SELECT b.create_date, bt.date, bt.odds, bt.event, bt.pick, s.name_id as sport_name_id, c.name_id as country_name_id FROM *bet b INNER JOIN *bet__tip bt ON bt.bet_id = b.id INNER JOIN *sport s ON s.id = bt.sport__id INNER JOIN country c ON c.id = bt.country_id WHERE b.user_id = '. $this->tipster_id .' AND b.id IN ('.
			'SELECT b.id FROM *bet__tip bt INNER JOIN *bet b ON b.id = bt.bet_id WHERE bt.date > "'. $now .'" AND b.result = 0 GROUP BY b.id'.
		')';
		// $this->db->query()
		
		
		
		/*
		 * Group tips by bet id
		 */
		
		$bets_data = [];
		
//		foreach(...->fetch_all() ...)
		
		
		return $bets_data;
	}
	
	
	/**
	 * Get tipster id by taking into account default value
	 * @param int $tipster_id Custom tipster id
	 * @return int Tipster id
	 */
	private function get_tipster_id( int $tipster_id ) : int {
		return $tipster_id > 0 ? $tipster_id : $this->tipster_id;
	}
	
}

<?php

namespace Project\Bet;

class Tipster_bet_managemnt extends \Project\Model implements Bet_management{
	
	
	/**
	 * Create a new Tipster bet managemnt instance
	 * @return void
	 */
	function __construct(){
		parent::__construct();
	}


	/**
	 * Save tipster new bet
	 * @param array $data Bet data
	 *		<ul>
	 *			<li>['event']		<i>string</i> Event</li>
	 *			<li>['odds']		<i>float</i> Odds</li>
	 *			<li>['sport_id']	<i>int</i> Sport id</li>
	 *			<li>['country_id']	<i>int</i> Country id</li>
	 *		</ul>
	 */
	function save_bet( array $data ) : void {
		$data = $this->validate( $data, [] );
		
		
		// some data processing
		// foreach( $bet_data ... )
		
		
		/*
		 * Save bet
		 */
		
		// get user id
		$user_id = 0;
		
		'INSERT INTO *bet (user_id) VALUES ('. $user_id .')';
		// $bet_id = ...->insertId();
		'INSERT INTO *bet__tip (bet_id, date, country_id, sport_id, event, pick) VALUES ('. $bet_id .', ...)';
	}
	
}

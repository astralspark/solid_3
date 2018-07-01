<?php

namespace Project\Bet;

class Admin_bet_management extends \Project\Model implements Bet_management{
	
	
	
	/**
	 * Create a new Admin bet management instance
	 *@return void
	 */
	function __construct(){
		parent::__construct();
	}


	/**
	 * Update bet
	 * @param array $bet_data
	 *		<ul>
	 *			<li>['event']		<i>string</i> Event</li>
	 *			<li>['odds']		<i>float</i> Odds</li>
	 *			<li>['sport_id']	<i>int</i> Sport id</li>
	 *			<li>['country_id']	<i>int</i> Country id</li>
	 *		</ul>
	 * @return void
	 */
	function save_bet( array $bet_data ) : void {
		$bet_data = $this->validate( $bet_data, [] );
		
		// some data processing
		// foreach( $bet_data ... )
		
		
		/*
		 * Update bet
		 */
		
		'UPDATE *bet__tip SET date = .., country_id = ... WHERE id = ...';
		'UPDATE *bet SET edit_date = NOW() WHERE id = ...';
	}
	
	
	/**
	 * Settle bet
	 * @param array $data
	 *		<ul>
	 *			<li>['id']		<i>int</i> Bet ID</li>
	 *			<li>['result']	<i>int</i> Result</li>
	 *		</ul>
	 * @return void
	 */
	function settle_bet( array $data ) : void {
		$data = $this->validate( $data, [] );
		
		/*
		 * Calculate profit
		 */
		
		// some instructions
		
		$calculated_profit = 0;
		
		
		/*
		 * Update bet
		 */
		
		'UPDATE *bet SET result = '. $data['result'] .', profit = '. $calculated_profit .' WHERE id = '. $data['id'];
	}
	
}

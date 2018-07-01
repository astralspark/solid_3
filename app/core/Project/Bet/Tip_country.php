<?php

namespace Project\Bet;

/**
 * Description of TipCountry
 *
 */
class Tip_country extends \Project\Model{
	
	/**
	 *
	 * @var array List of countries. Array of strings
	 */
	private $countries_list = [];
	
	
	
	/**
	 * Create a new Tip country instance
	 * @return void
	 */
	function __construct(){
		parent::__construct();
		
		
		// get data from DB
		
		$this->countries_list = [];
	}
			
	
	/**
	 * Get name_id of given country id
	 * @param int $id Country id
	 * @return string Get country name_id
	 */
	function get_tip_country_by_id( int $id ) : string {
		return $this->countries_list[$id] ?? '';
	}
	
	
	/**
	 * Get countries list
	 * @return array Countries list
	 */
	function get_countries_list() : array {
		return $this->countries_list;
	}
	
}

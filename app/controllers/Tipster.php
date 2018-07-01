<?php

namespace Modules;

use \Project\Exception;
use \Project\Bet\Tipster_bet_managemnt;
use \Project\Bet\Tip_country;

class Tipster extends Controller{
	
	
	/**
	 * Prepare view for adding new bet
	 * @return string View
	 */
	function add_new_bet() : string {
		
		/*
		 * Get and set countries list
		 */
		
		$Tip_country = new Tip_country;
		$countries_list = '';
		
		foreach( $Tip_country->get_countries_list() as $k=>$v ){
			$countries_list = '<option value="'. $k .'">'. htmlspecialchars( translate( $v ) );
		}
		
		$this->set_data( 'countries_list', $countries_list );
		
		
		
		return $this->View->make( 'example' );
	}
	
	
	/**
	 * Save new bet
	 * @return string View
	 */
	function save_bet() : string {
		$data = $_POST;
		$Tipster_bet_management = new Tipster_bet_managemnt;
		
		try{
			$Tipster_bet_management->save_bet( $data );
			
		}catch( Exception $e ){
			
			/*
			 * Custom exception handle
			 */
			
			$this->View->set_data( 'exception', $e->getMessage() );
			
			return $this->View->make( 'example2' );
		}
		
		
		return $this->View->make( 'example' );
	}
	
}

<?php

namespace Modules;

use \Project\Exception;
use \Project\Bet\Admin_bet_management;

class Admin extends Controller{
	
	/**
	 * Save bet edit
	 * @return string View
	 */
	function save_bet_edit() : string {
		$data = $_POST;
		$Admin_bet_management = new Admin_bet_management;
		
		try{
			$Admin_bet_management->save_bet( $data );
			
		}catch( Exception $e ){
			
			/*
			 * Custom exception handle
			 */
			
			$this->View->set_data( 'exception', $e->getMessage() );
			
			return $this->View->make( 'example2' );
		}
		
		
		return $this->View->make( 'example' );
	}
	
	
	/**
	 * Settle bet
	 * @return string View
	 */
	function settle_bet() : string {
		$data = $_POST;
		$Admin_bet_management = new Admin_bet_management;
		
		$Admin_bet_management->settle_bet( $data );
		
		
		return $this->View->make( 'example' );
	}
	
}

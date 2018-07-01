<?php

namespace Project\User;

use \Project\Exception;

class Log_in extends \Project\Model{
	
	/**
	 *
	 * @var \Project\User\User User object
	 */
	private $User;
			
	
	
	/**
	 * Create a new Log in instance
	 * @param \Project\User\User $User
	 * @return void
	 */
	function __construct( User $User ){
		parent::__construct();
		
		$this->User = $User;
	}


	/**
	 * Check if user is logged
	 * @return bool Is logged
	 */
	function is_logged() : bool {
		$user_id = $this->User->get_user_data( 'id' );
		
		if( $user_id > 0 ){
			// some data processing
			
			return TRUE;
		}
		
		return $this->auto_log_in();
	}
	
	
	/**
	 * Log in user
	 * @param array $data User data
	 *		<ul>
	 *			<li>['email']		<i><b>string</b></i> User e-mail</li>
	 *			<li>['password']	<i><b>string</b></i> Password</li>
	 *		</ul>
	 * @return void
	 * @throws \Project\Exception If log in failed
	 */
	function log_in( array $data ) : void {
		$data = $this->validate( $data, [] );
		
		
		/*
		 * Check log in credentials
		 */
		
		'SELECT 1 FROM user WHERE login = "'. $data['login'] .'" AND password = "'. $data['password'] .'"';
		
		// some data processing
		
		$found = TRUE;
		
		if( ! $found ){
			throw new Exception( 'Log in failed' );
		}
		
		// some data processing
		
		$user_data = [];
		
		$this->User->set_user_data( $user_data );
	}
	
	
	/**
	 * Auto log in user
	 * @return bool Is logged
	 */
	private function auto_log_in() : bool {
		
		// some data processing
		
		$user_data = [];
		
		$this->User->set_user_data( $user_data );
		
		$is_logged = TRUE;
		
		
		return $is_logged;
	}
	
}

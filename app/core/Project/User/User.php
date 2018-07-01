<?php

namespace Project\User;

class User extends \Project\Model{
	
	/**
	 *
	 * @var array User data
	 */
	private $user_data = [];
			
	
	
	
	/**
	 * Create a new User instance
	 * @return void
	 */
	function __construct(){
		parent::__construct();
	}
			
	
	/**
	 * Check if user is logged
	 * @return bool Is logged
	 */
	function is_logged() : bool {
		return ( new Log_in( $this ) )->is_logged();
	}
	
	
	/**
	 * Get current user data
	 * @param string $key Property name
	 * @return string|int|array User data
	 */
	function get_user_data( string $key ){
		return $this->user_data[$key] ?? '';
	}
	
	
	/**
	 * Set user data
	 * @param array $data User data to set
	 */
	function set_user_data( array $data ) : void {
		$this->user_data = array_merge( $this->user_data, $data );
	}
	
}

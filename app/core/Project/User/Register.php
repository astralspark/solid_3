<?php

namespace Project\User;

class Register extends \Project\Model{
	
	
	/**
	 * Create a new Register instance
	 * @return void
	 */
	function __construct(){
		parent::__construct();
	}


	/**
	 * Register user
	 * @param array $data User data
	 *		<ul>
	 *			<li>['email']		<i><b>string</b></i> User e-mail</li>
	 *			<li>['name']		<i><b>string</b></i> Name</li>
	 *			<li>['password']	<i><b>string</b></i> Password</li>
	 *		</ul>
	 * @return void
	 */
	function register( array $data ) : void {
		$data = $this->validate( $data, [] );
		
		// some registration process
		
	}
	
}

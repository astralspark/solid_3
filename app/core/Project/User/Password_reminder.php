<?php

namespace Project\User;

class Password_reminder extends \Project\Model{
	
	
	/**
	 * Create a new Password reminder instance
	 * @param \Project\User\User $User User object
	 * @return void
	 */
	function __construct( User $User ){
		parent::__construct();
		
		$this->User = $User;
	}

	
	/**
	 * Send e-mail with instructions for password recovery
	 * @param array $data User data
	 *		<ul>
	 *			<li>['email']	<i><b>string</b></i> User e-mail</li>
	 *			<li>['captcha'] <i><b>string</b></i> Captcha</li>
	 *		</ul>
	 * @return void
	 */
	function remind_user_password( array $data ) : void {
		$data = $this->validate( $data, [] );
		
		// some data processing
		
	}
	
}

<?php

namespace Project;

class Exception extends \Exception{
	
	/**
	 * Create a new Exception instance by modifying \Exception constructor
	 * @param string $message Exception message
	 * @param int $code Code
	 * @param \Throwable $previous Previous exception
	 * @return void
	 */
	function __construct( string $message = "", int $code = 1, \Throwable $previous = null ){
		parent::__construct( 'Custom exception: '. $message, $code, $previous );
	}
	
}

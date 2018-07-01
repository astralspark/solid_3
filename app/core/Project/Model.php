<?php

namespace Project;

class Model{
	
	/**
	 *
	 * @var \Project\DB\SQL Database object
	 */
	protected $db;
			
	
	/**
	 * Create a new Model instance
	 * @return void
	 * @global \Project\DB\SQL $db Database object
	 * @todo IMP Replace global $db with...?
	 */
	function __construct(){
		global $db;
		
		$this->db = clone $db;
	}




	/**
	 * Validate data and return valid, parsed data
	 * @param array $data Data to validate
	 * @param array $validation_rules Validation rules
	 * @return array Valid data
	 * @throws Exception
	 */
	function validate( array $data, array $validation_rules ) : array {
		$Validate = new Validate;
		
		if( $Validate->validate_data( $data, $validation_rules ) ){
			throw new Exception( 'Data validation failed' );
		}
		
		
		return $Validate->get_valid_data();
	}
	
	
	/**
	 * Set class/model error
	 * @param string $error Error text
	 * @return void
	 */
	function set_error( string $error ) : void {
		// some code to process errors
	}
	
}

<?php

namespace Project;

class Validate extends Model{
	
	/**
	 *
	 * @var array Valid data after validation process
	 */
	private $valid_data = [];
	
	
	

	/**
	 * Create a new Validate instance
	 * @return void
	 */
	function __construct(){
		parent::__construct();
	}



	/**
	 * Validate data using given validation rules
	 * @param array $data
	 * @param array $validation_rules
	 * @return bool Validation result
	 * @throws Exception
	 */
	function validate_data( array $data, array $validation_rules ) : bool {
		$is_valid = FALSE;
		$valid_data = [];
		
		
		// some validation process
		
		
		$this->valid_data = $valid_data;
		
		
		return $is_valid;
	}
	
	
	/**
	 * Get valid data from last validate process
	 * @return array Valid data
	 */
	function get_valid_data() : array {
		return $this->valid_data;
	}
	
}

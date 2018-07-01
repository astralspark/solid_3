<?php

namespace Project\DB;

class PDO implements SQL{
	
	
	/**
	 * Connect to database
	 * @param array $connect_data Database connection data
	 * @return void
	 */
	function connect( array $connect_data ) : void {
		// some code
	}
	
	
	/**
	 * Execute query
	 * @param string $query Query string
	 */
	function query( string $query ){
		// some code
	}
	
	
	/**
	 * Get all rows
	 * @return array All rows
	 */
	function feth_all() : array {
		// some code
	}
	

	/**
	 * Get single row
	 * @return array Single row data
	 */
	function get_row() : array {
		// some code
	}

}

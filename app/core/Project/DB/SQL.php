<?php

namespace Project\DB;

interface SQL{
	
	/**
	 * 
	 * @param array $connect_data Connect data
	 */
	function connect( array $connect_data );
	
	
	/**
	 * 
	 * @param string $query Query string
	 */
	function query( string $query );
	
	
	function get_row();
	
	
	function feth_all();
	
}

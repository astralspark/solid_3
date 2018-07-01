<?php

namespace Project\View;

use Project\Exception;

class View extends \Project\Model{
	
	/**
	 *
	 * @var array All views data
	 */
	private $data = [];
	
	
	
	
	
	
	/**
	 * Create a new View instance
	 * @return void
	 */
	function __construct(){
		parent::__construct();
	}


	/**
	 * Set view data
	 * @param string|array $key Single value (string) or multiple values (array)
	 * @param string $value Value
	 * @param type $allow_array_key Allow or disallow array as key
	 * @return void
	 */
	function set_data( $key, string $value = '', $allow_array_key = TRUE ) : void {
		
		
		/*
		 * Handle array keys
		 */
		
		if( is_array( $key ) ){
			
			if( ! $allow_array_key ){
				throw new Exception( 'Array key in view data, not allowed at this point' );
			}
			
			
			/*
			 * Save each value separately
			 */
			
			foreach( $key as $k=>$v ){
				$this->set_data( $k, $v, FALSE );
			}
			
			return;
		}
		
		
		// maybe some data processing...
		
		
		/*
		 * Save view data
		 */
		
		$this->data[$k] = $v;
	}
			
	
	/**
	 * Make view
	 * @param string $view_name View file
	 * @return string View
	 * @throws Exception
	 */
	function make( string $view_name ) : string {
		
		
		/*
		 * Safely get view file content
		 */
		
		if( ! is_file( VIEWS_DIR . $view_name .'.html' ) ){
			throw new Exception( 'View not found' );
		}
		
		$file_content = file_get_contents( VIEWS_DIR . $view_name .'.html' );
		
		if( $file_content === FALSE ){
			throw new Exception( 'Error while getting view file' );
		}
		
		
		/*
		 * Parse data and return view file
		 */
		
		return $this->parse_view_data( $file_content );
	}
	
	
	/**
	 * Parse view string using view data
	 * @param string $file_content View string
	 * @return string Parsed view string
	 */
	private function parse_view_data( string $file_content ) : string {
		
		// some data processing
		
		$string = $file_content;
		
		return $string;
	}
	
}

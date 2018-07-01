<?php

set_exception_handler( function( Throwable $e ){
	
	/*
	 * Handle Project exceptions
	 */
	
	if( $e instanceof \Project\Exception ){
		$View = new \Project\View\View;
		
		$View->set_data( 'error_text', $e->getMessage() );
		$View->make( 'error_page' );
		exit;
	}
	
	
	/*
	 * Other exceptions
	 */
	
	exit( 'Unhandled exception: '. $e->getMessage() );
} );
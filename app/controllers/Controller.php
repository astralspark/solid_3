<?php

namespace Modules;

class Controller{
	
	/**
	 *
	 * @var \Project\View\View View object;
	 */
	protected $View;
	
	
	
	
	/**
	 * Create a new Controller instance
	 * @return void
	 */
	function __construct(){
		$this->View = new \Project\View\View;
	}
	
}

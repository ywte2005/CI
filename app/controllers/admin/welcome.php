<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Admin_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->smarty->display('welcome.html');
	}
}
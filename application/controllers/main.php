<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		die('test');
	}

	public function how(){
		// $this->load->fir
		pdie([1,2,3,4,5]);
	}
}

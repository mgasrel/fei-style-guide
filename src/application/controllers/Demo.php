<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends TX_Controller {
	
	public function index()
	{
        	$this->load->view('demo/content', $this->init_data());
	}
}

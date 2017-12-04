<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Components extends TX_Controller {
	
	public function index()
	{
		$this->url_segments[0] = 'components';
		$this->load->view('common/default_page', $this->init_data());
	}
}

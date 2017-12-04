<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class More extends TX_Controller {

	public function index()
	{
        $this->load->view('common/default_page', $this->init_data());
	}
}

<?php

class My_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$logado = $this->session->userdata("logado");

		if($logado != 1)
		$this->load->view('login');
	}
}
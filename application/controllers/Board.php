<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

	public function index()
	{
		$this->load->view('board_form');
	}
}

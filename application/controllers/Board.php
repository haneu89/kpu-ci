<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {
    function __construct() {
        parent::__construct();  // 부모에 있는 생성자를 호출

        $this->load->database();
        $this->load->model('board_model');
    }

	public function index()
	{
		$this->load->view('board_form');
    }
    public function write() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $name = $_POST['name'];

        $this->board_model->write($title, $content, $name);
        echo '저장완료';
    }
}

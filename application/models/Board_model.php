<?php
class Board_model extends CI_Model {

    function __construct() {
        parent::__construct();  // 부모에 있는 생성자를 호출
    }
    function write($title, $content, $name) {
        $this->db->insert('board', array(
            'name'=>$name,
            'title'=>$title,
            'content'=>$content
            )
        );
    }

}

?>
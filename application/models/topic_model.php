<?php
class Topic_model extends CI_Model { //약속
    function __construct(){
        parent::__construct();
    }
    public function gets(){
        return $this->db->query('SELECT * FROM topic')->result();
    }
    public function get($topic_id){
        return $this->db->get_where('topic',array('id'=>$topic_id))->row(); //액티브레코드, 이식성좋음
    }
}
?>
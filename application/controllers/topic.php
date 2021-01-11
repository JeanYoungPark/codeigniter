<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller { //java처럼 파일명과 매치
    function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->model('topic_model');
    }

    function index(){ //약속
        $topics = $this->topic_model->gets();
        
        $this->load->view('header');
        $this->load->view('topic_list',array('topics'=>$topics));
        $this->load->view('main'); //view안의 topic을 찾아준다.
        $this->load->view('footer');
    }
    function get($id){
        $topics = $this->topic_model->gets();
        $topic = $this->topic_model->get($id);

        $this->load->view('header');
        $this->load->view('topic_list',array('topics'=>$topics));
        $this->load->helper(array('korean'));
        $this->load->view('get',array('topic'=>$topic));
        $this->load->view('footer');
    }
}
//주소/index.php/컨트롤러 안에 있는파일/메소드(post,get)/인자
?>
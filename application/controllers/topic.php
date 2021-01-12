<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller { //java처럼 파일명과 매치
    function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->model('topic_model');
    }

    function index(){ //약속
        $this->_head();
        $this->load->view('main'); //view안의 topic을 찾아준다.
        $this->load->view('footer');
    }
    function get($id){
        $this->_head();
        $topic = $this->topic_model->get($id);
        $this->load->helper(array('korean'));
        $this->load->view('get',array('topic'=>$topic));
        $this->load->view('footer');
    }
    function add(){
        $this->_head();
         
        $this->load->library('form_validation');
 
        $this->form_validation->set_rules('title', '제목', 'required');
        $this->form_validation->set_rules('description', '본문', 'required');
         
        if ($this->form_validation->run() == FALSE)
        {
             $this->load->view('add');
        }
        else
        {
            $topic_id = $this->topic_model->add($this->input->post('title'), $this->input->post('description'));
            // $this->load->helper('url'); autoload에서 불러왔음
            redirect('/topic/get/'.$topic_id);
        }

        $this->load->view('footer');
    }
    function _head(){ //앞에 _가 붙으면 private 약속
        $this->load->view('header');
        $topics = $this->topic_model->gets();
        $this->load->view('topic_list',array('topics'=>$topics));
    }
}
//주소/index.php/컨트롤러 안에 있는파일/메소드(post,get)/인자
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller { //java처럼 파일명과 매치
    function index(){ //약속
        $this->load->view('header');
        $this->load->view('topic'); //view안의 topic을 찾아준다.
        $this->load->view('footer');
    }
    function get($id){
        $this->load->view('header');
        $this->load->view('main',array('id'=>$id));
        $this->load->view('footer');
    }
}
//주소/index.php/컨트롤러 안에 있는파일/메소드(post,get)/인자
?>
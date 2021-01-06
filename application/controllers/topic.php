<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller { //java처럼 파일명과 매치
    function index(){ //약속
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
            </head>
            <body>
                토픽 메인 페이지
            </body>
        </html>
        ';
    }
    function get($id){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
            </head>
            <body>
                토픽 '.$id.'
            </body>
        </html>
        ';
    }
}
//주소/index.php/컨트롤러 안에 있는파일/메소드(post,get)/인자
?>
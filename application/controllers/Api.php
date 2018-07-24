<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct(){

		 parent::__construct();
		 $this->load->model(array('blackcard_model'));
	 }

	 public function update(){
     $pwd = $this->input->post("pwd");
     if (!empty($pwd)) {
       $data = array(
        'password' => $pwd
       );
       $date = array('up_date', 'up_time');
       $where = "id=".'"'.$this->session->userdata("login_id").'"';
       if($this->blackcard_model->updates('member', $data, $date, $where)){
         $view_data["code"] = 200;
         $view_data["msg"] = "更新成功!!!";
       }else {
         $view_data["code"] = 404;
         $view_data["msg"] = "更新失敗!!!";
       }
     }else {
       $view_data["code"] = 404;
       $view_data["msg"] = "密碼不能為空";
     }
     $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($view_data));
	 }

	 public function mail(){

     $name = $this->input->post('name');
     $email = $this->input->post('email');
     $phone = $this->input->post('phone');
     $msg = $this->input->post('message');

		 $this->load->library('email');
		 $result = $this->email
    ->reply_to($email, $name)
    ->to("wanwanton958@gmail.com")
    ->subject("來自卡片介紹網站問題-".$name)
    ->message(
      '發問者姓名：'.$name.
      '<br/>發問者信箱：'.$email.
      '<br/>發問者電話：'.$phone.
      '<br/>詢問內容：'.$msg
      )
    ->send();
    if ($result) {
      return true;
    }else {
      return false;
    }
	 }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blackcard extends CI_Controller {

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

	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model(array('blackcard_model'));
	 }

	public function index()
	{
		if($this->session->userdata('login_status')){
			$this->load->view('blackcard');
		}else {
			redirect("blackcard/login");
		}
	}

	public function login(){
		$view_data = array(
			"title" => "卡片登入"
		);
		if (!empty($this->input->post("rule")) && $this->input->post("rule") == "login") {
			if(!empty($this->input->post('username')) && !empty($this->input->post('password'))){
				$user = $this->input->post('username'); // 帳號
				$pwd = $this->input->post('password'); // 密碼
				if($this->blackcard_model->chk_login($user, $pwd)){

					if($this->blackcard_model->do_login($user)){
						$in_out_data = array();

						$in_out_date_column = array('login_date', 'login_time');
						$where = "id ="."'".$this->session->userdata('login_id')."'";
						if($this->blackcard_model->updates('member', $in_out_data, $in_out_date_column, $where)){
							redirect("blackcard");
						}else {
							$view_data["code"] = 404;
							$view_data["msg"] = "更新失敗，請重新登入!!!";
							$this->load->view('login', $view_data);
						}
					}else {
						$view_data["code"] = 404;
						$view_data["msg"] = "登入失敗，請重新登入!!!";
					}
				}else {
					$view_data["code"] = 404;
					$view_data["msg"] = "帳號或密碼錯誤!!!";
					$this->load->view('login', $view_data);
				}
			}else {
				$view_data["code"] = 404;
				$view_data["msg"] = "帳號或密碼不得為空!!!";
				$this->load->view('login', $view_data);
			}
		}else {
			$this->load->view('login', $view_data);
		}
	}

	public function logout(){
		if($this->blackcard_model->logout()){
			redirect("blackcard/login");
		}
	}
}

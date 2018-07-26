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

	 public function __construct(){

		 parent::__construct();
		 $this->load->model(array('blackcard_model'));
	 }

	 public function index(){
		 $view_data = array(
			 "title" => "旺旺通TCI"
		 );
		 if($this->session->userdata('login_status')){
			 $id = $this->session->userdata("login_id");
			 $where = "id=".'"'.$id.'"';
			 $view_data["data"] = $this->blackcard_model->get_once("member", $where);
			 $this->load->view("blackcard", $view_data);

		 }else {
			 redirect("blackcard/login");
		 }
	 }

	 public function login(){

		 $view_data = array(
			 "title" => "會員登入",
			 "username" => "請輸入帳號",
			 "ar" => "帳號必填",
			 "password" => "請輸入密碼",
			 "pr" => "密碼必填",
			 "button" => "登入",
			 "en_url" => "en_login",
			 "lan" => "English"
		 );
		 if (!empty($this->input->post("rule")) && $this->input->post("rule") == "login") {
			 if(!empty($this->input->post('username')) && !empty($this->input->post('password'))){
				 $user = $this->input->post('username'); // 帳號
				 $pwd = $this->input->post('password'); // 密碼

				 if($this->blackcard_model->chk_login($user, $pwd)){ // 檢查是否有這人存在

					 if($this->blackcard_model->do_login($user)){
						 $data = array();

						 $date = array('login_date', 'login_time');
						 $where = "id ="."'".$this->session->userdata('login_id')."'";
						 if($this->blackcard_model->updates('member', $data, $date, $where)){
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
// 英文版
	 public function en_login(){

		 $view_data = array(
			 "title" => "Member Login",
			 "username" => "Please Enter Your Account",
			 "ar" => "Account Required",
			 "password" => "Please Enter Your Password",
			 "pr" => "Password Required",
			 "button" => "Login",
			 "en_url" => "login",
			 "lan" => "中文"
		 );
		 if (!empty($this->input->post("rule")) && $this->input->post("rule") == "login") {
			 if(!empty($this->input->post('username')) && !empty($this->input->post('password'))){
				 $user = $this->input->post('username'); // 帳號
				 $pwd = $this->input->post('password'); // 密碼

				 if($this->blackcard_model->chk_login($user, $pwd)){ // 檢查是否有這人存在

					 if($this->blackcard_model->do_login($user)){
						 $data = array();

						 $date = array('login_date', 'login_time');
						 $where = "id ="."'".$this->session->userdata('login_id')."'";
						 if($this->blackcard_model->updates('member', $data, $date, $where)){
							 redirect("blackcard/en_index");
						 }else {
							 $view_data["code"] = 404;
							 $view_data["msg"] = "Time update failed, please login again!!!";
							 $this->load->view('login', $view_data);
						 }
					 }else {
						 $view_data["code"] = 404;
						 $view_data["msg"] = "Login failed, please login again!!!";
					 }
				 }else {
					 $view_data["code"] = 404;
					 $view_data["msg"] = "Account or Password Incorrect!!!";
					 $this->load->view('login', $view_data);
				 }
			 }else {
				 $view_data["code"] = 404;
				 $view_data["msg"] = "Account or Password cannot be empty!!!";
				 $this->load->view('login', $view_data);
			 }
		 }else {
			 $this->load->view('en_login', $view_data);
		 }
	 }

	 public function en_index(){
	 	$view_data = array(
	 		"title" => "WanWanTon TCI"
	 	);
	 	if($this->session->userdata('login_status')){
	 		$id = $this->session->userdata("login_id");
	 		$where = "id=".'"'.$id.'"';
	 		$view_data["data"] = $this->blackcard_model->get_once("member", $where);
	 		$this->load->view("en_blackcard", $view_data);

	 	}else {
	 		redirect("blackcard/login");
	 	}
	 }

	 public function en_logout(){
		 if($this->blackcard_model->logout()){
			 redirect("blackcard/en_login");
		 }
	 }
// 英文版
}

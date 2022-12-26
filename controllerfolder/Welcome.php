<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index1()
	{
		$this->load->view('welcome_message');
	    echo "hello every";
	}

	public function index(){
		echo "hey there im trying";
		$this->load->view('home');

	}

	function registration_page(){
		$this->load->view('registration');
	}

	function registration_process(){
		$data['username']=$this->input->post('username');
		$data['email']=$this->input->post('email');
		$data['password']=$this->input->post('password');
		$data['cpassword']=$this->input->post('password2');
        
		$this->load->model('Home_model');
		$status = $this->Home_model->insert($data);

		if($status == true){
			echo "Registration Success";
		}
		else{
			echo "failed!";
		}

	}

	function login(){
		$this->load->view('login');

	}


	function login_process(){
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');

		$this->load->model('Home_model');
		$status=$this->Home_model->get($data);

		if($status == true){
			echo "login successfully","<br>";
			echo'username',$data['username'],"<br>";
            echo 'password',$data['password'];
			
		}
		else{
			echo "login details incorrect";
		}

	}
}
